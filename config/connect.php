<?php
$conn=mysqli_connect("localhost","root" ,"","webshop");
if(!$conn){
    die(mysqli_error($conn));
}