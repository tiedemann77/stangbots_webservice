<html>
  <div style="text-align: center;">
	<p><b>FERRAMENTA EXPERIMENTAL</b></p>
    <p>Esta ferramenta lista artigos de uma dada categoria com uma dada qualidade na Wikipédia em Português, de acordo com a estimativa do ORES.</p>
    <p>Limite de 500 artigos por categoria, considera apenas a categoria principal (não entra em subcategorias).</p>
    <br/>
    <form action="/quality.php" type="GET">
      <p>Categoria:</p>
      <input type="text" name="category" <?php if(isset($_GET['category'])){echo 'value="' . $_GET['category'] . '"';}?>>
	  <br />
	  <br />
	  <p>Qualidade:</p>
      <select type="select" name="quality">
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
      </select>
      <br/>
      <br/>
      <input type="submit" value="Enviar">
    </form>

<?php

//require_once(__DIR__ . "/../stangbots/common.php");
require_once(__DIR__ . "/../stangbots/autoloader.php");


if(isset($_GET['category'])){
  $category = $_GET['category'];
  if(isset($_GET['quality'])){
    $quality = $_GET['quality'];
     run($category,$quality);
  }
}

function run($category,$quality){
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
  'format' => 'json'
];

$result = $api->request($params);

$list = $result['query']['categorymembers'];

// Obtendo o id dos artigos
$params = [
  'action' => 'query',
  'prop' => 'revisions',
  'rvprop' => 'ids',
  'rvslots' => 'main',
  'rvlimit' => '1'
];

foreach ($list as $key => $value) {
  $params['titles'] = $value['title'];
  $result = $api->request($params);
  foreach ($result['query']['pages'] as $key2 => $value2) {
      $articles[] = [
        'title' => $list[$key]['title'],
        'revid' => $result['query']['pages'][$key2]['revisions'][0]['revid']
      ];
    }
  }
 
// Obtém qualidade, ainda improvisado, mas funcional
foreach ($articles as $key => $value) {
	$ores = file_get_contents('https://ores.wikimedia.org/v3/scores/ptwiki/' . $value['revid'] . '/articlequality');
	
	$ores = json_decode($ores, TRUE);
	
	$articles[$key]['quality'] = $ores['ptwiki']['scores'][$value['revid']]['articlequality']['score']['prediction'];
	
}

$text = '<p>Resultado para "' . $category . '" com qualidade ' . $quality . ':</p>
<textarea rows="30" cols="150">
{| class="wikitable"
|+
!Artigo
|-';

foreach($articles as $key => $value){
	
if($value['quality']==$quality){
$text .= "
|[[" . $value['title'] . "]]
|-";
}
}

  $text .= "
|}
</textarea>";

  echo $text;
}

?>

  </div>
</html>
