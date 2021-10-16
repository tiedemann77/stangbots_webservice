<?php

/* INCLUDES CODE FROM MEDIAWIKI API DEMOS, LINCENSED UNDER MIT LICENSE */

function queryDB($query){
  $ts_pw = posix_getpwuid(posix_getuid());
  $ts_mycnf = parse_ini_file($ts_pw['dir'] . "/replica.my.cnf");
  $mysqli = new mysqli('tools.db.svc.wikimedia.cloud', $ts_mycnf['user'], $ts_mycnf['password'], 's54852__stangbots');
  unset($ts_mycnf, $ts_pw);

  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if(gettype($result)!=="boolean"){
    return $result->fetch_all(MYSQLI_BOTH);
  }
}

?>
