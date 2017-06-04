<?php
  session_start();

  if (isset($_POST['post_header'])) {
    $post_header = $_POST['post_header'];
    if ($post_header == "") {
      unset($post_header);
    }
  }

  if (isset($_POST['post_text'])) {
    $post_text = $_POST['post_text'];
    if ($post_text == "") {
      unset($post_text);
    }
  }
  
  if (empty($post_header) or empty($post_text)) {
    exit("you miss something");
  }
  $post_header = trim(htmlspecialchars(stripcslashes($post_header)));
  $post_text = trim(htmlspecialchars(stripcslashes($post_text)));
  
  include("db.php");
  
  if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
  }
  else {
	// ID 0 for anonymous
    $user_id = 0;
  }
  add_post($user_id, $post_header, $post_text);
  
  header('Location: index.php');
?>