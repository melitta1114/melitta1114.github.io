<?php
    $sname="localhost";
    $rname="root";
    $password="";
    $db_name="php projekt";

    $conn=mysqli_connect($sname, $rname, $password, $db_name);

    if(!$conn){
        echo "Nem lehet csatlakozni a szerverhez";
    }
?>