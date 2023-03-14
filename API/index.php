<?php
    include_once "bdpath.php";
    include_once "bdfuncs.php";
    include_once "execute.php";

    $method = $_SERVER["METHOD"];

    

    switch ($_SERVER["REQUEST_METHOD"]){
   case "PUT":

       break;
   case "POST":
        $req = $_POST["request"];
        $url = explode("/",filter_var($_GET['demande'],FILTER_SANITIZE_URL));
        execute_post($url);
       break;
   case "GET":
        $req = $_GET["request"];
        $url = explode("/",filter_var($_GET['demande'],FILTER_SANITIZE_URL));
        execute_get($url);
        break;
   case "DELETE":

        break;
}
?>