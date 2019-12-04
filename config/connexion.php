<?php

    function connexion() {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "portfolio";
    
        try{
           $bdd = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8",$username, $password);
        }
        catch(Exception $e){
            die("Erreur :".$e-> getMessage());
        }    
        return $bdd;
    }
?>