<?php
	require_once("KondoSQL.php");
	$KondoSQL = KondoSQL::instance();
	$KondoSQL->get();
	echo $KondoSQL->errors();
?>