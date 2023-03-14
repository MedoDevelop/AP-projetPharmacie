<?php

    function execute_post($url){

    }

    function execute_get($url){
        
    }

    function sendJSON($infos){
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($infos,JSON_UNESCAPED_UNICODE);
    }
?>