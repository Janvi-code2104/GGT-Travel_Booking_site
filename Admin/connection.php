<?php
$db = mysqli_connect("localhost", "root", "", "trip");
if(mysqli_connect_error()){
    echo"cannot connect to database";
    exit();
}
?>