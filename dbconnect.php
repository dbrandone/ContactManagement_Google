<?php
$serverName = "strong-augury-367622:us-central1:cst323-davidedwards-google"; // update me
$username = "root"; // update me
$password = "password"; // update me
$database = "contactmanagement"; // update me

    //Establishes the connection
//$connect = SQLSRV_CONNECT($serverName, $connectionOptions);

    $connect = new mysqli($serverName, $username, $password, $database);

        if(!$connect){
            die("No Connection to SQL Server");
        }

?>