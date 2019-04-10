<?php
  include("bd.php");
  header('Content-Type: text/html; charset=UTF-8');
  header("HTTP/1.1 200 OK");
  $r = array();
  $params = json_decode(file_get_contents('php://input'), true);
  switch ($params['command']) {
    case 'read':
        $result = mysql_query("SELECT * FROM task",$db);
        while($res = mysql_fetch_array($result))
        {
          $r[] = $res['message'];
        }
        echo json_encode($r);
      break;
    case 'add':
      $message = $params['data'];
      $result = mysql_query("INSERT INTO task (message) VALUES ('$message')",$db);
      break;
    case 'del':
      $message = $params['data'];
      $result = mysql_query("DELETE FROM task WHERE message='$message'",$db);
      break;
  }
 ?>
