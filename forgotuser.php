<?php
include 'connect.php';
global $conn;
if(isset($_POST['email']))
{
    if(!empty($_POST['email']))
    {
        $result=  mysqli_query($conn,"Select * from users where email='".mysqli_real_escape_string($conn,$_POST['email'])."'");
        if(mysqli_num_rows($result)==1)
        {
            $row=  mysqli_fetch_array($result);
                $to=$row['email'];
                $subject="Forgot your Username";
                $msg="Your username is '".$row['user']."'";
                $body="Dear, '".$row['name']."'\n".$msg;
                $headers="From:HTML and CSS Tutorials <a>";
                if(mail($to,$subject,$body,$headers))
                {
                    //echo 'Mail sent to '.$row['email'].' with your username';
                    echo "<script>alert('Mail sent to ".$row['email']." with your username')</script>";
                    echo("<meta http-equiv=\"refresh\" content=\"0;URL='nforgotform.php'\">");
                }else {
            //echo 'Email could not be sent. Try after some time';
            echo "<script>alert('Email could not be sent. Try after some time')</script>";
            echo("<meta http-equiv=\"refresh\" content=\"0;URL='nforgotform.php'\">");
        }
        }else{
                //echo 'You are not registered with us';
                echo "<script>alert('You are not registered with us')</script>";
                echo("<meta http-equiv=\"refresh\" content=\"0;URL='nforgotform.php'\">");
            }
    }else{
        //echo 'Please enter your email id';
        echo "<script>alert('Please enter your email id')</script>";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='nforgotform.php'\">");
    }
}
include 'nforgotform.php';
?>
