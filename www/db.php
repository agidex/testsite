<?php
  $db_server = "127.0.0.1";
  $db_name = "testsite";
  $db_login = "testsiteuser";
  $db_pass = "1234";
  $db = mysql_connect($db_server, $db_login, $db_pass) or die (mysql_error());
  mysql_select_db($db_name, $db);
?>