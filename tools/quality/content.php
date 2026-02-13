    <p>Esta ferramenta lista artigos em dada categoria na Wikipédia em Português, filtrados de acordo com a qualidade estimada pelo ORES.</p>
    <p>Considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="" type="GET">
      <p>Categoria:</p>
      <input type="text" name="category" <?php if(isset($_GET['category'])){echo 'value="' . $_GET['category'] . '"';}?>>
      <br />
      <br />
      <p>Utilizar categorização por página de discussão?</p>
      <select type="select" name="method">
          <option value="yes">Sim</option>
          <option value="no" <?php if(isset($_GET['method'])&&$_GET['method']=="no"){echo 'selected';} ?>>Não</option>
      </select>
	  <br />
	  <br />
      <input type="submit" value="Enviar">
    </form>

<?php

require_once(__DIR__ . "/../../../stangbots/autoloader.php");

if(isset($_GET['category'])&&isset($_GET['method'])){
  $category = $_GET['category'];
  $method = $_GET['method'];
  run($category,$method);
}

function run($category,$method){
// Settings
$settings = [
  'url' => "https://pt.wikipedia.org/w/api.php",
  'maxlag' => 4,
  'file' => __DIR__ .  "/../../../webservice_logs/log.log"
];

$stats = new Stats();
$log = new Log($settings['file'], $stats);
$api = new Api($settings['url'], $settings['maxlag'], $log, $stats);

// Obtendo os artigos da categoria
if($method=="yes"){
	$result = $api->articlesFromCategoryAtTalkPage($category);
}else{
	$result = $api->pagesFromCategory($category,0);
}

$articles = array();

foreach( $result as $key => $value ){

	$articles[]['title'] = $value;

}

// Obtendo o id dos artigos
$params = [
  'action' => 'query',
  'prop' => 'revisions',
  'rvprop' => 'ids',
  'rvslots' => 'main',
];

$count = count($articles);
$realized = 0;

foreach ($articles as $key => $value) {
	$realized++;
	if(!isset($params['titles'])&&$realized!=$count){
		$params['titles'] = $value['title'];
		$limit = 1;
	}elseif($limit<9&&$realized!=$count){
		$params['titles'] .= '|' . $value['title'];
		$limit++;
	}else{
		$params['titles'] .= '|' . $value['title'];
		$result = $api->request($params);

		foreach ($result['query']['pages'] as $key2 => $value2) {

			foreach ($articles as $key3 => $value3) {
				if($value2['title']==$value3['title']){
					$articles[$key3]['revid'] = $value2['revisions'][0]['revid'];
				}
			}

		}

		unset($limit);
		unset($params['titles']);
	}
}


// Obtém qualidade, ainda improvisado, mas funcional
$realized = 0;
foreach ($articles as $key => $value) {
	$realized++;
	if(!isset($revids)&&$realized!=$count){
		$revids = $value['revid'];
		$limit = 1;
	}elseif($limit<19&&$realized!=$count){
		$revids .= '|' . $value['revid'];
		$limit++;
	}else{
		$revids .= '|' . $value['revid'];

		$ores = file_get_contents('https://ores.wikimedia.org/v3/scores/ptwiki/?models=articlequality&revids=' . $revids);

		$ores = json_decode($ores, TRUE);

		$ores = $ores['ptwiki']['scores'];

		foreach ($ores as $key2 => $value2) {

			foreach ($articles as $key3 => $value3) {
				if($key2==$value3['revid']){
					$articles[$key3]['quality'] = $value2['articlequality']['score']['prediction'];
				}
			}

		}

		unset($limit);
		unset($revids);
	}

}

$text1 = '<p>Resultado para "' . $category . '" com qualidade 1:</p>
<textarea rows="30" cols="150">';

$text2 = '<p>Resultado para "' . $category . '" com qualidade 2:</p>
<textarea rows="30" cols="150">';

$text3 = '<p>Resultado para "' . $category . '" com qualidade 3:</p>
<textarea rows="30" cols="150">';

$text4 = '<p>Resultado para "' . $category . '" com qualidade 4:</p>
<textarea rows="30" cols="150">';

$text5 = '<p>Resultado para "' . $category . '" com qualidade 5:</p>
<textarea rows="30" cols="150">';

$text6 = '<p>Resultado para "' . $category . '" com qualidade 6:</p>
<textarea rows="30" cols="150">';

foreach($articles as $key => $value){
	switch($value['quality']){
		case 1:
			$text1 .= "
* [[" . $value['title'] . "]]";
			break;
		case 2:
			$text2 .= "
* [[" . $value['title'] . "]]";
			break;
		case 3:
			$text3 .= "
* [[" . $value['title'] . "]]";
			break;
		case 4:
			$text4 .= "
* [[" . $value['title'] . "]]";
			break;
		case 5:
			$text5 .= "
* [[" . $value['title'] . "]]";
			break;
		case 6:
			$text6 .= "
* [[" . $value['title'] . "]]";
			break;
		default:
			$text1 .= "
* [[" . $value['title'] . "]]";
			break;

	}
}

  $text1 .= "
</textarea>";

  $text2 .= "
</textarea>";

  $text3 .= "
</textarea>";

  $text4 .= "
</textarea>";

  $text5 .= "
</textarea>";

  $text6 .= "
</textarea>";

  echo $text1 . '<br />';
  echo $text2 . '<br />';
  echo $text3 . '<br />';
  echo $text4 . '<br />';
  echo $text5 . '<br />';
  echo $text6 . '<br />';
}

?>
