<?php
  session_start();
  const DB = ["127.0.0.1", "root", "", "pdo"]; 
  spl_autoload_register(function($a) {
    require_once dirname(__FILE__) . "\\" . $a . ".php";
  });
?>