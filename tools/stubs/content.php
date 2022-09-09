    <p>Esta ferramenta lista todos os esboços presentes em uma dada categoria na Wikipédia em Português.</p>
    <p>Considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="/stubs.php" type="GET">
      <p>Categoria:</p>
      <input type="text" name="category" <?php if(isset($_GET['category'])){echo 'value="' . $_GET['category'] . '"';}?>>
	  <br />
	  <br />
      <input type="submit" value="Enviar">
    </form>

<?php

//require_once(__DIR__ . "/../stangbots/common.php");
require_once(__DIR__ . "/../../stangbots/autoloader.php");


if(isset($_GET['category'])){
  $category = $_GET['category'];
  run($category);
}

function run($category){
// Settings
$settings = [
  'url' => "https://pt.wikipedia.org/w/api.php",
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
];

$result = $api->request($params);

foreach ($result['query']['categorymembers'] as $key => $value){
	$articles[] = [
		'title' => $value['title']
	];
}

while(isset($result['continue'])){
	$params['cmcontinue'] = $result['continue']['cmcontinue'];
	$result = $api->request($params);

	foreach ($result['query']['categorymembers'] as $key => $value){
		$articles[] = [
			'title' => $value['title']
		];
	}

}

// Obtendo o conteúdo de 10 páginas por vez
$count = count($articles);
$realized = 0;

foreach ($articles as $key => $value) {
	$realized++;
	if(!isset($titles)&&$realized!=$count){
		$titles[] = $value['title'];
		$limit = 1;
	}elseif($limit<9&&$realized!=$count){
		$titles[] = $value['title'];
		$limit++;
	}else{
		$titles[] = $value['title'];
		$result = $api->getMultipleContent($titles);

		// Escaneando o conteúdo buscando esboços
		foreach ($result as $key2 => $value2){
			if(preg_match('/{{(E|e)sboço-/',$value2)){
				$stubs[] = [
					'title' => $key2
				];
			}
		}

		unset($limit);
		unset($titles);
	}
}

$text = '<p>Artigos marcados como esboços em "' . $category . '":</p>
<textarea rows="30" cols="150">
{| class="wikitable"
|+
!Artigo
|-';

foreach($stubs as $key => $value){

	$text .= "
|[[" . $value['title'] . "]]
|-";

}

$text .= "
|}
</textarea>";

echo $text . '<br />';
}

?>
