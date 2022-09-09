    <p>Esta ferramenta verifica quais usuários editaram em um determinado projeto e período.</p>
    <p>Útil para apuração de wikiconcursos.</p>
    <br/>
<?php

require_once(__DIR__ . "/../../../stangbots/autoloader.php");

if(isset($_GET['users'])&&isset($_GET['project'])&&isset($_GET['start'])&&isset($_GET['end'])){
  $start = $_GET['start'] . "000000";
  $end = $_GET['end'] . "235959";
  $project = $_GET['project'];
  $users = $_GET['users'];
  run($start,$end,$project,$users);
}else{
  echo '    <form action="" type="GET">
        <p>Data inicial (formato YYYYMMDD):</p>
        <input type="text" name="start">
        <p>Data final (formato YYYYMMDD):</p>
        <input type="text" name="end">
        <p>Projeto:</p>
        <select type="select" name="project">
          <option value="ptwikiquote">ptwikiquote</option>
          <option value="wikidata">wikidata</option>
        </select>
        <p>Nomes de usuário (um por linha):</p>
        <textarea rows="30" cols="100" name="users"></textarea>
        <br/>
        <br/>
        <input type="submit" value="Enviar">
      </form>';
}

function run($start,$end,$project,$users){

  require_once(__DIR__ . "/../../../stangbots/autoloader.php");

  // Settings
  $settings = [
    'maxlag' => 4,
    'file' => __DIR__ .  "/log.log",
  ];

  if($project=="ptwikiquote"){
    $baselink =  "https://pt.wikiquote.org/w/";
  }elseif($project=="wikidata"){
    $baselink =  "https://www.wikidata.org/w/";
  }else{
    echo "ERROR: project {$project} not suported.";
    exit();
  }

  $settings['url'] = "{$baselink}api.php";

  $stats = new stats();
  $log = new log($settings['file'], $stats);
  $api = new api($settings['url'], $settings['maxlag'], $log, $stats);

  $params = [
    "action" => "query",
    "list" => "usercontribs",
    "uclimit" => "1",
    "ucend" => $start,
    "ucstart" => $end,
    "ucprop" => "timestamp"
  ];

  $users = explode("\n", str_replace("\r", "", $users));

  $start_link = mb_substr($start, 0, 4) . "-" . mb_substr($start, 4, 2) . "-" . mb_substr($start, 6, 2);
  $end_link = mb_substr($end, 0, 4) . "-" . mb_substr($end, 4, 2) . "-" . mb_substr($end, 6, 2);

  echo '<a href="/tools/whoedited/">VOLTAR</a><br />
  <p><b>Usuários que editaram entre ' . $start_link . ' e ' . $end_link . ' no projeto ' . $project . ':</b></p>';

  foreach ($users as $key => $value) {
      $params['ucuser'] = $value;
      $result = $api->request($params);
      if(count($result['query']['usercontribs'])>0){
        echo '<br />
<a href="' . $baselink . 'index.php?title=Special%3AContributions&target=' . $value . '&start=' . $start_link . '&end=' . $end_link . '" target="_BLANK">Contribuições de ' . $value . '</a>
<br/>';
      }

  }

}

?>
