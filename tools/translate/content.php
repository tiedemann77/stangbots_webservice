<br />
    <p>Esta ferramenta lista artigos de uma dada categoria na enwiki ou eswiki não existentes na ptwiki.</p>
    <p>Pode ser filtrada pelo números de sitelinks do artigo.</p>
    <p>Considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="" type="GET">
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

require_once(__DIR__ . "/../../../stangbots/autoloader.php");

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

$result = $api->request($params);

$list = $api->pagesFromCategory($category,"0");

// Obtendo os itens dos artigos
$params = [
  'action' => 'query',
  'prop' => 'pageprops',
  'ppprop' => 'wikibase_item'
];

$count = count($list);
$realized = 0;

foreach ($list as $key => $value) {
	$realized++;
	if(!isset($params['titles'])&&$realized!=$count){
		$params['titles'] = $value;
		$limit = 1;
	}elseif($limit<9&&$realized!=$count){
		$params['titles'] .= '|' . $value;
		$limit++;
	}else{
		$params['titles'] .= '|' . $value;
		$result = $api->request($params);

		foreach ($result['query']['pages'] as $key2 => $value2) {

      $articles[] = [
        'title_source' => $value2['title'],
        'wikidata' => $value2['pageprops']['wikibase_item']
      ];

		}

		unset($limit);
		unset($params['titles']);
	}
}

// Obtendo os sitelinks
$api->change("https://www.wikidata.org/w/api.php");

$params = [
  'action' => 'wbgetentities',
  'format' => 'json'
];

$count = count($articles);
$realized = 0;

foreach ($articles as $key => $value) {
	$realized++;
	if(!isset($params['ids'])&&$realized!=$count){
		$params['ids'] = $value['wikidata'];
		$limit = 1;
	}elseif($limit<49&&$realized!=$count){
		$params['ids'] .= '|' . $value['wikidata'];
		$limit++;
	}else{
		$params['ids'] .= '|' . $value['wikidata'];
		$result = $api->request($params);

		foreach ($result['entities'] as $key2 => $value2) {

			foreach ($articles as $key3 => $value3) {
				if($key2==$value3['wikidata']){

          $count2 = count($value2['sitelinks']);

          // Se tiver igual ou mais que a configuração
          if($count2>=$sitelinks){
            if(!isset($value2['sitelinks']['ptwiki'])){
              if(isset($value2['labels']['pt']['value'])){
                  $articles[$key3]['title_pt'] = $value2['labels']['pt']['value'];
              }elseif(isset($value2['labels']['en']['value'])){
                  $articles[$key3]['title_pt'] = $value2['labels']['en']['value'];
              }else{
                  $articles[$key3]['title_pt'] = $articles[$key3]['title_source'];
              }
            }else{
            unset($articles[$key3]);
            }
          }else{
            unset($articles[$key3]);
          }

				}
			}

		}

		unset($limit);
		unset($params['ids']);
	}
}

// Monta o resultado
if($wiki=="en"){
  $language = "inglês";
}else{
  $language = "espanhol";
}

$text = '<br /><p>Resultado para "' . $category . '" (' . $wiki . ') com no mínimo ' . $sitelinks . ' sitelinks:</p>
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
</textarea><br />";

  echo $text;
}

?>
<br />
