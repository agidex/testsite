<?php
  session_start();

  if (isset($_POST['comment_text'])) {
    $comment_text = $_POST['comment_text'];
    if ($comment_text == "") {
      unset($comment_text);
    }
  }
  
  if (empty($comment_text)) {
    exit("you miss something");
  }
  $comment_text = trim(htmlspecialchars(stripcslashes($comment_text)));
  
  include("db.php");
  
  $post_id = $_GET['post_id'];
  
  if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
  }
  else {
	// ID 0 for anonymous
    $user_id = 0;
  }
  add_comment($user_id, $post_id, $comment_text);
  
  header("Location: /post.php?id=$post_id");
?>