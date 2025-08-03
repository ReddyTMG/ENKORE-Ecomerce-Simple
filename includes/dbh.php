<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "enkore kpop store";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection fail" . mysqli_connect_error());
}