<?php

include("config.php");

if(isset($_POST['action'])){
    $name=$_POST['uname'];
    $email=$_POST['uemail'];
    $mobile=$_POST['umobile'];
    $password=$_POST['upassword'];
    $cpassword=$_POST['ucpassword'];
    if($password==$cpassword){

        $sql1="select email from users where email='$email'";
        $query1=mysqli_query($conn,$sql1);
    
        if(!mysqli_num_rows($query1)){
            $sql="insert into users(name,email,mobile,password) values('$name','$email','$mobile','$password')";
            $query=mysqli_query($conn,$sql);
            if($query){
                echo json_encode("successfully registered");
            }else{
                echo json_encode("something went wrong");
            }
        }else{
            echo json_encode("user already registerd");
        }
    }else{
        echo json_encode("password not matched");
    }
}