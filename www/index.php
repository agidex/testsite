<?php
    include('db.php');
    session_start();
  
    $posts = select_posts();
    $templ = 'templates/posts.html';
    include('templates/index.html');
?>