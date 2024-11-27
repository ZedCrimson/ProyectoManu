<?php
$mysqli = mysqli_connect("localhost", "root", "", "gym");
    if($mysqli->connect_errno){
        echo "Fallo al conectar con MySQL: (",$mysqli->connect_errno, ") ", $mysqli->connect_errno;
    }
?>