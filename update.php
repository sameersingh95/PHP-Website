<?php
include 'connect.php';
function Edit() {
    @session_start();
    global $conn;
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$dob = mysqli_real_escape_string($conn,$_POST['dob']);
	$nquery = "UPDATE users SET name='".$_SESSION['name']."' , mobile='".$mobile."' , dob='".$dob."' WHERE email='".$_SESSION['email']."'";
        $mquery = "UPDATE users SET name='".$name."' , mobile='".$_SESSION['mob']."' , dob='".$dob."' WHERE email='".$_SESSION['email']."'";
        $dquery = "UPDATE users SET name='".$name."' , mobile='".$mobile."' , dob='".$_SESSION['dob']."' WHERE email='".$_SESSION['email']."'";
        $query = "UPDATE users SET name='".$name."' , mobile='".$mobile."' , dob='".$dob."' WHERE email='".$_SESSION['email']."'";
        $ndata = mysqli_query($conn,$query);
        $mdata = mysqli_query($conn,$query);
        $ddata = mysqli_query($conn,$query);
        $data = mysqli_query($conn,$query);
        if(!empty($name)&&!empty($mob)&&!empty($dob))
        {
            if(data){
		@session_start();
		$_SESSION["name"]=$_POST["name"];
		$_SESSION["mob"]=$_POST["mobile"];
		$_SESSION["dob"]=$_POST["dob"];
                echo"<script>alert('Details have been modified')</script>";
		header("Location:ndetails.php");
            }else{
                echo mysqli_error($conn);
            }
        }
        elseif(empty($name)&&!empty($mob)&&!empty($dob))
        {
                if(ndata){
		@session_start();
		//$_SESSION["name"]=$_POST["name"];
		$_SESSION["mob"]=$_POST["mobile"];
		$_SESSION["dob"]=$_POST["dob"];
                echo"<script>alert('Details have been modified')</script>";
		header("Location:ndetails.php");
            }else{
                echo mysqli_error($conn);
            }
        }
        elseif(!empty($name)&&empty($mob)&&!empty($dob))
        {
                if(mdata){
		@session_start();
		$_SESSION["name"]=$_POST["name"];
		//$_SESSION["mob"]=$_POST["mobile"];
		$_SESSION["dob"]=$_POST["dob"];
                echo"<script>alert('Details have been modified')</script>";
		header("Location:ndetails.php");
            }else{
                echo mysqli_error($conn);
            }
        }
        else
        {
                if(ddata){
		@session_start();
		$_SESSION["name"]=$_POST["name"];
		$_SESSION["mob"]=$_POST["mobile"];
		//$_SESSION["dob"]=$_POST["dob"];
                echo"<script>alert('Details have been modified')</script>";
		header("Location:ndetails.php");
            }else{
                echo mysqli_error($conn);
            }
        }
	
}
if(isset($_POST['submit']))
{
	Edit();
}
?>