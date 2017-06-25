<?php
include 'connect.php';
global $conn;
@session_start();
if(!empty($_POST['token'])&&!empty($_POST['email'])&&!empty($_POST['pass'])&&!empty($_POST['pass1']))
{
    $query='Select * from users where email="'.$_POST['email'].'"';
    $result=  mysqli_query($conn, $query);
    $row=  mysqli_fetch_array($result);
    if($_POST['email']==$row['email'])
    {
        if($row['password']==sha1($_POST['token']))
        {
            if($_POST['pass']==$_POST['pass1'])
            {
                $query = "UPDATE users SET password='".sha1(mysqli_real_escape_string($conn,$_POST['pass']))."' WHERE email='".$_POST['email']."'";
		$data = mysqli_query($conn,$query);
                   if($data){
                        echo"<script>alert('PASSWORD HAS BEEN CHANGED')</script>";
                echo("<meta http-equiv=\"refresh\" content=\"0;URL='newpass.php'\">");
                $_SESSION['changed']=1;
            }else{
                die('marle');
            }}
            else{
                echo "<script>alert('Passwords don't match)</script>";
                include 'newpass.php';
            }
        }else{
            echo "<script>alert('Wrong token entered')</script>";
                include 'newpass.php';
        }
    }else{
        echo "<script>alert('You are not registered with us')</script>";
                include 'newpass.php';
    }
}else{
    echo "<script>alert('Please fill in the details')</script>";
                include 'newpass.php';
}

?>