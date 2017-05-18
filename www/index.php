<?php
	$username = "oaersgdsghh";
	
  include('db.php');
  $result = mysql_query("SELECT * FROM posts", $db);
  
  $posts = array();
  while($row = mysql_fetch_assoc($result)) {
    $post = array();
    $post['title'] = $row['post_header'];
    $post['text'] = $row['post_text'];
    $post['user'] = "username";
    $post['date'] = $row['date'];
    array_push($posts, $post);
  }
  
	$templ = 'templates/posts.html';
	include('templates/index.html');
?>