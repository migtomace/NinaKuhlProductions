<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 11/29/2018
 * Time: 4:22 PM
 */

//Here are the keys for the server: ninakuhl.com
$siteKey = "6LfFN0AUAAAAADKPmsYbv0R6ngVsFLwlI7jbtwT6";
$secretKey = "6LfFN0AUAAAAAG7e2LnvAgLh1-0XdVuirYtFyCj1";


$SELF = $_SERVER['REQUEST_URI'];



switch ($SELF){
    case "index.php":
        $title = "Home Page";
        break;
    case "about.php":
        $title = "About Page";
        break;
    case "exchange.php":
        $title = "Kuhl Exchange";
        break;
    case "movies.php":
        $title = "Movies";
        break;
    case "talents.php":
        $title = "Talents";
        break;
    case "events.php":
        $title = "Events";
        break;
    case "contact.php":
        $title = "Contact Page";
        break;
    default:
        $title = "Nina Kuhl Productions";
}

