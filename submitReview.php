 <?php
include 'connect.php';
function submit() {
    global $conn;
    session_start();
    if(isset($_POST['comment'])&&!empty($_POST['comment']))
    {
	$review = $_POST['comment'];
	date_default_timezone_set("Asia/Kolkata");
	//$dt = date("d/m/Y h:i:s");
	$user= $_SESSION['user'];
	$query = "INSERT INTO review (user_id,review,username,date) VALUES ('".$_SESSION['user_id']."','$review','$user',now())";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('Review submitted')</script>";
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='nReview.php'\">");
	}else{
            echo mysqli_error($conn);
        }
    }
    else
    {
        echo "<script>alert('Cannot submit an empty review')</script>";
        include 'nreview.php';
    }
}

if(isset($_POST['submit']))
{
	submit();
}
?>