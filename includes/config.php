<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 11/29/2018
 * Time: 4:22 PM
 */

//Here are the keys for the server: ninakuhl.com
$siteKey = "6Lca7UAUAAAAAHUG1AIm7SGUwAuowu97BDaAiKS4";
$secretKey = "6Lca7UAUAAAAABANgrg67qnceebfqQXfFtL9Fc5q";


$id = $_SERVER['REQUEST_URI'];



switch ($id){
    case "home":
        $title = "Home Page";
        break;
    case "about":
        $title = "About Page";
        break;
    case "exchange":
        $title = "Kuhl Exchange";
        break;
    case "movies":
        $title = "Movies";
        break;
    case "talents":
        $title = "Talents";
        break;
    case "events":
        $title = "Events";
        break;
    case "contact":
        $title = "Contact Page";
        break;
    default:
        $title = "home";
}

