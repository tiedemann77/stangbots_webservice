    <p>Esta ferramenta lista todos os artigos presentes em uma dada categoria na Wikipédia em Português que não tem infocaixa ({{Info...}}).</p>
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

if(isset($_GET['category'])){
  $category = $_GET['category'];
  run($category);
}

function run($category){
// Settings
$settings = [
  'url' => "https://pt.wikipedia.org/w/api.php",
  'maxlag' => 4,
  'file' => __DIR__ .  "/log.log"
];

$stats = new stats();
$log = new log($settings['file'], $stats);
$api = new api($settings['url'], $settings['maxlag'], $log, $stats);

// Obtendo os artigos da categoria
$articles $api->pagesFromCategory($category,"0");

// Obtendo o conteúdo de 10 páginas por vez
$count = count($articles);
$realized = 0;

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

		// Escaneando o conteúdo buscando esboços
		foreach ($result as $key2 => $value2){
			if(!preg_match('/{{(I|i)nfo/',$value2)){
				$noInfo[] = $key2;
			}
		}

		unset($limit);
		unset($titles);
	}
}

$text = '<p>Artigos sem {{Info...}} em "' . $category . '":</p>
<textarea rows="30" cols="150">
{| class="wikitable"
|+
!Artigo
|-';

foreach($noInfo as $key => $value){

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
