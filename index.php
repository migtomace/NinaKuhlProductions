<?php
/**
 * simple.php is a postback application designed to provide a
 * contact form for users to email our clients.
 *
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php
 * @see recaptchalib.php
 * @see util.js
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "migtomace@gmail.com";  //place your/your client's email address here
$toName = "Nina Kuhl"; //place your client's name here
$website = "www.ninakuhl.com";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'includes/config.php'; #site keys go inside your config.php file
include 'includes/contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
{#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
    handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    include "thnx.php";
    ?>
    <!-- START HTML FEEDBACK -->

    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback

    ?>
<?php include "includes/top.php"?>

<?php include "includes/home.php" ?>


<?php include "includes/about.php" ?>

<?php include "includes/movies.php" ?>


<?php include "includes/talents.php" ?>


<main id="exchange">



</main>

<?php include "includes/events.php" ?>

<?php include "includes/contact.php" ?>

    <?php
}
?>

<?php include "includes/bottom.php"?>