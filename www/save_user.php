<?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    if ($username == "") {
      unset($username);
    }
  }

  if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == "") {
      unset($password);
    }
  }
  
  echo($username);
  echo($password);
  
  if (empty($username) or empty($password)) {
    exit("you miss something");
  }
  $username = trim(htmlspecialchars(stripcslashes($username)));
  $password = trim(htmlspecialchars(stripcslashes($password)));
  
  include("db.php");
  
  add_user($username, $password);
  
  echo('Congratulations!');
  // header('Location: index.php');
?>