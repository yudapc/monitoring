<?php
  include 'mail.php';

  $url = $_GET['url'];
  $email = $_GET['email'];

  if(@file_get_contents($url.'/m.txt') === 'true') {
    Mail::sendmessage($url, $email, 'Running');
  } else {
    Mail::sendmessage($url, $email, 'Down');
  }
?>