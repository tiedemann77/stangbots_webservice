<?php

  require_once(__DIR__ . "/include.php");

  // Checagem 1: se as variáveis requeridas foram passadas
  if(!isset($_POST['script_name'])||!isset($_POST['bot'])){
    echo "What are you doing here?";
    exit();
  }

  $m_script_name = $_POST['script_name'];
  $m_bot = $_POST['bot'];

  // Checagem 2: se correspondem a um script válido
  switch ($m_bot) {
    case 'Stangbot':
      if($m_script_name==="Script 1"){$m_script = __DIR__ . "/../../stangbots/scripts/stangbot/script1.php";}
      elseif($m_script_name==="Script 2"){$m_script = __DIR__ . "/../../stangbots/scripts/stangbot/script2.php";}
      elseif($m_script_name==="Script 3"){$m_script = __DIR__ . "/../../stangbots/scripts/stangbot/script3.php";}
      elseif($m_script_name==="Script 4"){$m_script = __DIR__ . "/../../stangbots/scripts/stangbot/script4.php";}
      elseif($m_script_name==="mr-js-css"){$m_script = __DIR__ . "/../../stangbots/scripts/stangbot/mr-js-css.php";}
      else{
        echo("Script inválido.");
        exit();
      }
    break;
    case 'VerificaBot':
      if($m_script_name==="Script 1"){$m_script = __DIR__ . "/../../stangbots/scripts/verificabot/script1.php";}
      else{
        echo("Script inválido.");
        exit();
      }
    break;
    default:
      echo("Script inválido.");
      exit();
    break;
  }

  // Checagem 3: se o script é valido e pode ser executado manualmente
  $m_result = queryDB("SELECT do_manual FROM stats WHERE bot = '$m_bot' AND script_name = '$m_script_name';");

  if($m_result[0]['do_manual']===1){
      // Atualiza para impedir execução duplicada
      queryDB("UPDATE stats SET do_manual = 0 WHERE bot = '$m_bot' AND script_name = '$m_script_name';");
      // Executa
      $manualRun = TRUE;
      include($m_script);
  }else{
    echo("DB diverge.");
    exit();
  }

?>
