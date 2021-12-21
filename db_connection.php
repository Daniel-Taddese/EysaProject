<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="eysa_registral";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


if(!$conn){
    echo "connection faild";
}
