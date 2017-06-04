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
  
  if (empty($username) or empty($password)) {
    exit("you miss something");
  }
  $username = trim(htmlspecialchars(stripcslashes($username)));
  $password = trim(htmlspecialchars(stripcslashes($password)));
  
  include("db.php");
  
  $user = select_user($username, $password);
  if (empty($user)) {
    exit("Wrong username or password!");
  }
  
  session_start();
  $_SESSION['login'] = $user['login'];
  $_SESSION['id']    = $user['id'];
  $_SESSION['admin'] = $user['admin'];
  $_SESSION['date']  = $user['date'];
  
  // echo('Congratulations!');
  header('Location: index.php');
?>