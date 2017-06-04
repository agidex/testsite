<?php
  session_start();
  
  $post_id = $_GET['id'];
  
  include('db.php');
  $p = select_post($post_id);
 
  $comments = select_comments($post_id);
 
  $templ = 'templates/post_comments.html';
  include('templates/index.html');
?>