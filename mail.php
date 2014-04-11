<?php
date_default_timezone_set('Asia/Jakarta');

class Mail {

  public static function sendmessage($url='', $email='', $status='') {
    $time_now = date('d-m-Y H:i');
    $subject = 'Monitoring Website';
    $from = "boxguecom@gmail.com";
    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body>';
    $message .= "<h2>Status Website [$status]</h2>";
    $message .= "Your Website $status <br /> <br /> <b> $time_now </b> <br /> <br /> <a href='$url'>$url</a>";
    $message .= "<br /><br /><br /> Automatic Monitoring Powered By <a href='id.boxgue.com'>id.boxgue.com</a>";
    $message .= '</body></html>';
    mail($email,$subject,$message,$headers);
  }

}
