    <p>Esta ferramenta lista todos os artigos com erros comuns (typos) e cuja página de discussão está em uma dada categoria na Wikipédia em Português.</p>
    <p>AVISO: esta ferramenta é lenta.</p>
    <p>Considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="" type="GET">
      <p>Categoria:</p>
      <input type="text" name="category" <?php if(isset($_GET['category'])){echo 'value="' . $_GET['category'] . '"';}?>>
	  <br />
	  <br />
      <input type="submit" value="Enviar">
    </form>

<?php

require_once(__DIR__ . "/../../../stangbots/autoloader.php");
require_once(__DIR__ . "/expressions.php");

if(isset($_GET['category'])){
  $category = $_GET['category'];
  run($category);
}

function run($category){

global $expressions;

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
$articles = $api->articlesFromCategoryAtTalkPage($category);

// Obtendo o conteúdo de 10 páginas por vez
$count = count($articles);
$realized = 0;
$stubs = array();

foreach ($articles as $key => $value) {
	$realized++;
	if(!isset($titles)&&$realized!=$count){
		$titles[] = $value;
		$limit = 1;
	}elseif($limit<9&&$realized!=$count){
		$titles[] = $value;
		$limit++;
	}else{
		$titles[] = $value;
		$result = $api->getMultipleContent($titles);

		// Escaneando o conteúdo buscando páginas com erros
		foreach ($result as $key2 => $value2){
			$countTypos = 0;
      			foreach ($expressions as $key3 => $value3){
			     if(preg_match($value3,$value2)){
				if($countTypos>3){
					$countTypos = 0;
					$stubs[] = $key2;
		     			break;
				}else{
					$countTypos++;
				}
			   }
      			}
		}

		unset($limit);
		unset($titles);
	}
}

$text = '<p>Artigos com erros em "' . $category . '":</p>
<textarea rows="30" cols="150">
{| class="wikitable"
|+
!Artigo
|-';

foreach($stubs as $key => $value){

	$text .= "
|[[" . $value . "]]
|-";

}

$text .= "
|}
</textarea>";

echo $text . '<br />';
}

?>
