<?php
include 'connect.php';
function SignIn()
{
session_start();
global $conn;
if(!empty($_POST['pass1'])&&!empty($_POST['npass'])&&!empty($_POST['rnpass']))
        {
            if($_SESSION['pass']==sha1($_POST['pass1']))
	{
		if ($_SESSION['pass']==sha1($_POST['npass'])) 
                    {
                           echo "<script>alert('New password can\'t be same as your current password')</script>";
                           include 'pass1.html';
                     }
                else
                {
                    if($_POST['npass']==$_POST['rnpass'])
		{
		$query = "UPDATE users SET password='".sha1(mysqli_real_escape_string($conn,$_POST['npass']))."' WHERE email='".$_SESSION['email']."'";
		$data = mysqli_query($conn,$query);
                   if($data){
                        echo"<script>alert('PASSWORD HAS BEEN CHANGED')</script>";
                        header("Location:details.php");
                            }else{
                                echo mysqli_error($conn);
                            }
		}
                else{
		echo "<script>alert('BOTH PASSWORDS ARE NOT MATCHING.....PLEASE GO BACK AND RETRY')</script>";
                include 'pass1.html';
                }
        }
            }	
	else
	{
		echo "<script>alert('CURRENT PASSWORD INCORRECT......PLEASE GO BACK AND RETRY')</script>";
		include 'pass1.html';
	}
 
        }else{
            echo "<script>alert('Enter the given fields')</script>";
            include 'pass1.html';
        }
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>