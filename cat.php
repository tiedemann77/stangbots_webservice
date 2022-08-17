<html>
  <div style="text-align: center;">
    <p>Esta ferramenta lista artigos de uma dada categoria na enwiki ou eswiki não existentes na ptwiki.</p>
    <p>Pode ser filtrada pelo números de sitelinks do artigo.</p>
    <p>Limite de 500 artigos por categoria, considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="/cat.php" type="GET">
      <p>Categoria:</p>
      <input type="text" name="category" <?php if(isset($_GET['category'])){echo 'value="' . $_GET['category'] . '"';}?>>
      <select type="select" name="wiki">
        <option value="en">enwiki</option>
        <option value="es">eswiki</option>
      </select>
      <br/>
      <br/>
      <p>Número mínimo de sitelinks:</p>
      <select type="select" name="sitelinks">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select><br/><br/>
      <input type="submit" value="Enviar">
    </form>
<?php

//require_once(__DIR__ . "/../stangbots/common.php");
require_once(__DIR__ . "/../stangbots/autoloader.php");

if(isset($_GET['category'])){
  $category = $_GET['category'];
  if(isset($_GET['sitelinks'])){
    $sitelinks = $_GET['sitelinks'];
    if(isset($_GET['wiki'])){
      $wiki = $_GET['wiki'];
      run($category,$sitelinks,$wiki);
    }
  }
}

function run($category,$sitelinks,$wiki){
// Settings
$settings = [
  'url' => "https://" . $wiki . ".wikipedia.org/w/api.php",
  'maxlag' => 4,
  'file' => __DIR__ .  "/log.log",
  'stats' => array()
];

$stats = new stats();
$log = new log($settings['file'], $stats);
$api = new api($settings['url'], $settings['maxlag'], $log, $stats);

// Obtendo os artigos da categoria
$params = [
  'action' => 'query',
  'list' => 'categorymembers',
  'cmtitle' => $category,
  'cmlimit' => '500',
  'cmnamespace' => '0',
  'format' => 'json'
];

$result = $api->request($params);

$list = $result['query']['categorymembers'];

// Obtendo os itens dos artigos
$params = [
  'action' => 'query',
  'prop' => 'pageprops',
  'ppprop' => 'wikibase_item',
  'format' => 'json'
];

foreach ($list as $key => $value) {
  $params['titles'] = $value['title'];
  $result = $api->request($params);
  foreach ($result['query']['pages'] as $key2 => $value2) {
    if(isset($result['query']['pages'][$key2]['pageprops']['wikibase_item'])){
      $articles[] = [
        'title_source' => $list[$key]['title'],
        'wikidata' => $result['query']['pages'][$key2]['pageprops']['wikibase_item']
      ];
    }
  }
}

// Obtendo os sitelinks
$api->change("https://www.wikidata.org/w/api.php");

$params = [
  'action' => 'wbgetentities',
  'format' => 'json'
];

foreach ($articles as $key => $value) {
  $params['ids'] = $value['wikidata'];
  $result = $api->request($params);
  $count = count($result['entities'][$value['wikidata']]['sitelinks']);
  // Se tiver igual ou mais que a configuração
  if($count>=$sitelinks){
    if(!isset($result['entities'][$value['wikidata']]['sitelinks']['ptwiki'])){
      if(isset($result['entities'][$value['wikidata']]['labels']['pt']['value'])){
        $articles[$key]['title_pt'] = $result['entities'][$value['wikidata']]['labels']['pt']['value'];
      }elseif(isset($result['entities'][$value['wikidata']]['labels']['en']['value'])){
		$articles[$key]['title_pt'] = $result['entities'][$value['wikidata']]['labels']['en']['value'];
      }else{
        $articles[$key]['title_pt'] = $articles[$key]['title_source'];
      }
    }else{
		unset($articles[$key]);
	}
  }
}

// Monta o resultado
if($wiki=="en"){
  $language = "inglês";
}else{
  $language = "espanhol";
}

$text = '<p>Resultado para "' . $category . '" (' . $wiki . ') com no mínimo ' . $sitelinks . ' sitelinks:</p>
<textarea rows="30" cols="150">
{| class="wikitable"
|+
!Artigo em português
!Artigo em ' . $language . '
|-';

foreach($articles as $key => $value){
  $text .= "
|[[" . $articles[$key]['title_pt'] . "]]
|[[:" . $wiki . ":" . $articles[$key]['title_source'] . "|" . $articles[$key]['title_source'] . "]]
|-";
}

  $text .= "
|}
</textarea>";

  echo $text;
}
?>
  </div>
</html>
