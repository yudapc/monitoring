<?php
/**
 * example :
 * php run.php http://yourwebsite.com yudapc@gmail.com
*/

  include 'mail.php';

  $url = $argv[1];
  $email = $argv[2];

  if(@file_get_contents($url.'/m.txt') === 'true') {
    Mail::sendmessage($url, $email, 'Running');
  } else {
    Mail::sendmessage($url, $email, 'Down');
  }
?>
