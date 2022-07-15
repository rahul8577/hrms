<?php

$conn=new mysqli("localhost","root","","hrms");

if(!$conn){
    die(mysqli_error($conn));
}