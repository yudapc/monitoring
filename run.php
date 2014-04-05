<?php
/**
 * example run on crontab cpanel :
 * /usr/bin/php -q /home/fhunila/public_html/exts/run.php http://www.pacificseatranslines.co.id yudapc@gmail.com >/dev/null
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
