<?php
  function connect_db() {
    $db_server = "127.0.0.1";
    $db_name   = "testsite";
    $db_login  = "testsiteuser";
    $db_pass   = "1234";
    $db = mysql_connect($db_server, $db_login, $db_pass) or die (mysql_error());
    mysql_select_db($db_name, $db);
    mysql_query("SET NAMES 'utf8';");
    
    return $db;
  }
  
  function post_parse_row($row) {
    $post = array();
    $post['id']    = $row['PostID'];
    $post['title'] = $row['post_header'];
    $post['text']  = $row['post_text'];
    $post['user']  = ($row['user_login'] == null) ? "USER DELETED" : $row['user_login'];
    $post['date']  = $row['post_date'];
    
    if ($row['UserID'] == 0) {
      $post['user'] = "Anonymous";
    }
    return $post;
  }
  
  function select_post($post_id) {
    $db = connect_db();
    
    // $result = mysql_query("SELECT * FROM posts WHERE PostID = $post_id", $db);
    $result = mysql_query("SELECT PostID, post_header, post_text, post_date, posts.UserID, user_login FROM posts LEFT OUTER JOIN users ON posts.UserID = users.UserID WHERE PostID = $post_id", $db);
    
    while($row = mysql_fetch_assoc($result)) {
      $post = post_parse_row($row);
    }
    
    return $post;
  }
  
  function select_posts() {
    $db = connect_db();
    
    $result = mysql_query("SELECT PostID, post_header, post_text, post_date, posts.UserID, user_login FROM posts LEFT OUTER JOIN users ON posts.UserID = users.UserID", $db);
    
    $posts = array();
    while($row = mysql_fetch_assoc($result)) {
      $post = post_parse_row($row);
      array_push($posts, $post);
    }
    
    return $posts;
  }
  
  function add_post($user_id, $post_header, $post_text) {
    $db = connect_db();
    
    $result = mysql_query("INSERT INTO posts (UserID, post_header, post_text) VALUES ('$user_id', '$post_header', '$post_text')");
  }
  
  function add_user($username, $password) {
    $db = connect_db();
    
    $admin = false;
    $result = mysql_query("INSERT INTO users (user_login, user_pass, user_admin) VALUES ('$username', '$password', '$admin')");
  }
  
  /*
  login check
  */
  function check_username($username) {
    $db = connect_db();

    $result = mysql_query("SELECT UserID FROM users WHERE user_login = $username", $db);
    
    $row = mysql_fetch_array($result);
    if (!empty($row['UserID'])) {
      return false;
    }
    return true;
  }
  
  function select_user($username, $passhash) {
    $db = connect_db();
    
    $result = mysql_query("SELECT UserID, user_login, user_admin, user_date FROM users WHERE user_login = '$username' AND user_pass = '$passhash'", $db);
    
    $user = array();//Главная-Портфолио-Услуги-Контакты
    while($row = mysql_fetch_assoc($result)) {
      $user = array();
      $user['id']    = $row['UserID'];
      $user['login'] = $row['user_login'];
      $user['admin'] = $row['user_admin'];
      $user['date']  = $row['user_date'];
    }
    
    return $user;
  }
  
  function select_comments($post_id) {
    $db = connect_db();
    
    $result = mysql_query("SELECT comment_text, comment_date, comments.UserID, user_login FROM comments LEFT OUTER JOIN users ON comments.UserID = users.UserID WHERE PostID = $post_id", $db);
    
    $comments = array();
    while($row = mysql_fetch_assoc($result)) {
      $comment = array();
      $comment['text']  = $row['comment_text'];
      $comment['user']  = ($row['user_login'] == null) ? "USER DELETED" : $row['user_login'];
      $comment['date']  = $row['comment_date'];
      
      if ($row['UserID'] == 0) {
        $comment['user'] = "Anonymous";
      }
      array_push($comments, $comment);
    }
    
    return $comments;
  }
  
  function add_comment($user_id, $post_id, $comment_text) {
    $db = connect_db();
    
    $result = mysql_query("INSERT INTO comments (UserID, PostID, comment_text) VALUES ('$user_id', '$post_id', '$comment_text')");
  }
  
?>

















