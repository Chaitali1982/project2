<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="employee";

$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die('Connection fail: '.mysqli_connect_error());
}
else{
    echo "";
}
?>