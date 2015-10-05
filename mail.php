<?
if (array_key_exists('message', $_POST)) {
   $to = 'info@open-baton.org';
   $subject = 'baton '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Name: ".$_POST['name']."\nEmail: ".$_POST['contacts']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['message'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['name'];
}
?>