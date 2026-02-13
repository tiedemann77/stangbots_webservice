    <p>Esta ferramenta lista todos os artigos que possuem uma marcação de esboço e cuja página está em uma dada categoria na Wikipédia em Português.</p>
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
	$articles = $api->articlesFromCategoryAtTalkPage($category);
}else{
	$articles = $api->pagesFromCategory($category,0);
}

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

		// Escaneando o conteúdo buscando esboços
		foreach ($result as $key2 => $value2){
			if(preg_match('/{{(E|e)sboço-/',$value2)){
				$stubs[] = $key2;
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
|[[" . $value . "]]
|-";

}

$text .= "
|}
</textarea>";

echo $text . '<br />';
}

?>
