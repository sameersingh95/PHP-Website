<?php
include 'connect.php';
//@include 'logincheck.inc.php';
?>
<!doctype html>
<html>
<head>
<title>Tutorials</title>
<link rel="stylesheet" href="signanimate.css" type="text/css" />

</head>
<body >
    <div class="adjust"><blockquote><fieldset><legend>Your Review</legend>
	<!--<script src="reviewValidate.js"></script>-->			
		<?php 
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
			{
                            global $conn;
				echo"
			<form id='addCommentForm' method='POST' action='submitReview.php' name='commentForm'>
				<textarea rows='5' cols='40' style='margin: 0px; border: none; border-radius: 3px;' name='comment'></textarea>
                                <br><br>
				<input name='submit' type='submit' class='buttons' value='Submit'/>
                                <input name='reset' type='reset' class='buttons' value='Reset'/>";echo"</fieldset>";
                               // echo"<div><blockquote>";
				if($reviews = mysqli_query($conn,"SELECT review,username,date FROM review"))
                                {
				if($num=  mysqli_num_rows($reviews)>0){
					while($row = mysqli_fetch_assoc($reviews)){
						echo '<br><br><br>Name: '. $row["username"].'<br>Review: ' . $row["review"]. '<br>Added on: ' . date("d/m/Y h:i:s a", strtotime($row["date"])). '<br>';
					}
				}
				else {
					echo '<br><br><br>No reviews';
				}
                        }else{
                        echo mysqli_error($conn);
                        }}
			else
			{
				echo"<h3><a href='nsign.php'>Login</a> or <a href='nsignup.php'>Sign up</a> to give review.</h3>";
			}
		?>   
        </blockquote></div>
    
</body>
</html>