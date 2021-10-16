<?php
  require_once("include.php");
  $result = queryDB("SELECT * FROM stats ORDER BY bot, script_name;");
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stangbots - dashboard</title>
    <link href="https://tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="https://tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      function processForm(id, scriptname, bot) {
        $.post("p.php",
          {
            script_name: scriptname,
            bot: bot
          });
        document.getElementById(id).setAttribute("disabled", true);
        document.getElementById(id).className = "btn btn-dark";
        document.getElementById(id).setAttribute("value", "Indisponível");
        document.getElementById('sucess').removeAttribute("hidden");
        document.getElementById('sucess').innerHTML = "<b>"+scriptname+"</b> de <b>"+bot+"</b> solicitado com sucesso! Tenha em mente que a execução pode levar vários minutos.";
      }
    </script>
  </head>
  <body style="text-align: center;">
<?php
  $hour = date("H");
  if($hour>7&&$hour<19){
    echo '  <table class="table">';
  }else{
    echo '  <table class="table table-dark">';
  }
?>
      <thead>
        <tr>
          <th scope="col">Bot</th>
          <th scope="col">Script</th>
          <th scope="col">Última exec. (UTC)</th>
          <th scope="col">Duração</th>
          <th scope="col">Req. API</th>
          <th scope="col">Con. SQL</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
<?php
  foreach ($result as $key => $value) {
    echo "        <tr>\n";
    echo "          <td>" . $result[$key]['bot'] . "</td>\n";
    echo "          <td>" . $result[$key]['script_name'] . "</td>\n";
    echo "          <td>" . $result[$key]['last'] . "</td>\n";
    if($result[$key]['duration']==0){
      echo "          <td>menos de 1 segundo</td>\n";
    }else{
      echo "          <td>" . $result[$key]['duration'] . " segundo(s)</td>\n";
    }
    echo "          <td>" . $result[$key]['api_requests'] . "</td>\n";
    echo "          <td>" . $result[$key]['sql_requests'] . "</td>\n";
    if($result[$key]['do_manual']==1){
      if($result[$key]['bot']=="VerificaBot"&&($result[$key]['script_name']=="Script 3"||$result[$key]['script_name']=="Script 2")){
        echo '          <td><input type="button" class="btn btn-dark" value="Indisponível" disabled></td>';
      }else{
        echo '          <td><input type="button" id="button' . $key . '" onclick="processForm(' . "'" . 'button' . $key . "'," . "'"  . $result[$key]['script_name'] . "'" . ',' . "'" . $result[$key]['bot'] . "'" . ')" class="btn btn-success" value="Rodar"></td>';
      }
    }else{
      echo '          <td><input type="button" class="btn btn-dark" value="Indisponível" disabled></td>';
    }
    echo "        </tr>\n";
  }
?>
      </tbody>
    </table>
    <div id="sucess" class="alert alert-success" role="alert" hidden></div>
    <footer class="footer">
      <div class="container">
        Bot's <a href="https://github.com/tiedemann77/stangbots" class="link-success" target="_blank">source code</a> on GitHub! This webservice <a href="https://github.com/tiedemann77/stangbots_webservice" target="_blank" class="link-success">source code</a> on GitHub! Both under MIT License. As always,
        <span class="text-muted center"><a href="https://wikitech.wikimedia.org/wiki/Portal:Toolforge" target="_blank"><img src="https://tools-static.wmflabs.org/toolforge/banners/Powered-by-Toolforge-button.png" class="rounded" alt="Powered by Wikimedia Toolforge"></a></span>
      </div>
    </footer>
  </body>
</html>
