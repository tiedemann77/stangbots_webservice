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

$params = [
  'action' => 'query',
  'list' => 'categorymembers',
  'cmtitle' => $category,
  'cmlimit' => '500',
  'cmnamespace' => '0',
  'format' => 'json'
];

$result = $api->request($params);

$articles_en = $result['query']['categorymembers'];

$params = [
  'action' => 'query',
  'prop' => 'pageprops',
  'ppprop' => 'wikibase_item',
  'format' => 'json'
];

foreach ($articles_en as $key => $value) {
  $params['titles'] = $value['title'];
  $result = $api->request($params);
  foreach ($result['query']['pages'] as $key2 => $value2) {
    if(isset($result['query']['pages'][$key2]['pageprops']['wikibase_item'])){
      $articles2[] = [
        'title' => $articles_en[$key]['title'],
        'wikidata' => $result['query']['pages'][$key2]['pageprops']['wikibase_item']
      ];
    }
  }
}

$api->change("https://www.wikidata.org/w/api.php");

$params = [
  'action' => 'wbgetentities',
  'format' => 'json'
];

foreach ($articles2 as $key => $value) {
  $params['ids'] = $value['wikidata'];
  $result = $api->request($params);
  $count = count($result['entities'][$value['wikidata']]['sitelinks']);
  if($count>=$sitelinks){
    if(!isset($result['entities'][$value['wikidata']]['sitelinks']['ptwiki'])){
      if(isset($result['entities'][$value['wikidata']]['labels']['pt']['value'])){
        $title = $result['entities'][$value['wikidata']]['labels']['pt']['value'];
      }elseif(isset($result['entities'][$value['wikidata']]['labels']['en']['value'])){
        $title = $result['entities'][$value['wikidata']]['labels']['en']['value'];
      }else{
        $title = $articles2[$key]['title'];
      }
      $articles3[] = [
        'title' => $title,
        'wikidata' => $articles2[$key]['wikidata']
      ];
    }
  }
}

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

foreach($articles3 as $key => $value){
  $text .= "
|[[" . $articles3[$key]['title'] . "]]
|[[:" . $wiki . ":" . $articles3[$key]['title'] . "|" . $articles3[$key]['title'] . "]]
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
