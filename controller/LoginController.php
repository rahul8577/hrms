<?php
session_start();
include("config.php");
if (isset($_POST['action'])) {
    try {
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pass=mysqli_real_escape_string($conn,$_POST['password']);

        $sql="select email,password,user_type from users where email='$email' and password='$pass' limit 1";
        $query=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($query)==1){
            // throw new Exception("available");
            $type=mysqli_fetch_assoc($query);
            $_SESSION['user_type']=$type['user_type'];
            $_SESSION['email']=$email;
            $_SESSION['password']=$pass;
            // mysqli_num_rows($query);
            echo json_encode(["status"=>"success","message"=>"login successfull"]);
        }else{
            throw new Exception("invalid credential");
        }
    } catch (Exception $th) {
        echo json_encode(["status"=>"failed","message"=>$th->getMessage()]);
    }
}