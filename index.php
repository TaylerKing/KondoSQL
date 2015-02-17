<?php
	require_once("media/inc.php");
	$KondoSQL = KondoSQL::instance();
	$sql = $KondoSQL->get('testing', array('data', '=', '476'));
  if($sql->results() !== false) {
    echo "First: " . $sql->first()->name;
    echo "<br/>Data<br/>";
    foreach($sql->results() as $result) {
      echo $result->name . "<br/>";
    }
  } else echo "no";
  echo $KondoSQL->update("testing", array("name", "=", "test"), array("name" => "no test"));
?>