<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/30/2019
 * Time: 11:06 PM
 */

$toAddress = "migtomace@gmail.com";
$toName = "Nina Kuhl";
$Subject = "ninakuhl.com: ".$toName;
$Name = $_POST['name'];

$msg = "<div style='background: beige; border-radius: 10px; padding: 1em; margin: 1em; line-height: 1.25;'><h1>".$toName." someone has contacted you</h1>";
$msg .= "<p>".$_POST['message']."</p>";
$msg .= "<h2>From: ".$Name."</h2></div>";
$fromAddress = $_POST['email'];
$website = "ninakuhl.com";
$fromDomain = $_SERVER["SERVER_NAME"];

$headers .= "Reply-To: miguel.acevedo@websitesinseattle.com>\r\n";
$headers .= "Return-Path: miguel.acevedo@websitesinseattle.com>\r\n";
$headers .= "From: miguel.acevedo@websitesinseattle.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

//email_handler($toAddress,$toName,$Subject,$txt,$fromAddress,$Name,$website,$fromDomain);
if (empty($toAddress) || empty($msg) || empty($Name)){
    header("Location: ../contact.php?feedback=empty");
} else {
    if (mail($toAddress,$Subject,$msg,$headers)){
        header("Location: ../contact.php?feedback=success");
    } else {
        header("Location: ../contact.php?feedback=fail");
    }
}


