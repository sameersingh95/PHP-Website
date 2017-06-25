<?php
include 'connect.php';
include'logincheck.inc.php';
global $conn;
 
$query="Select thumbnail from images where user_id='".$_SESSION['user_id']."'";
if($result=  mysqli_query($conn, $query))
{
    if(mysqli_num_rows($result)==0)
    {
        echo 'No images uploaded';
    }else{
            while($row=  mysqli_fetch_array($result))
                {
                    //include 'genthumbnail.php';
                   // thumbnail('uploads/'.$row['thumbnail']);
                    //header('thumbimages.php');
                    echo "<img src='thumbnails/".$row['thumbnail']."'>";
                }
        }
    }  
else
{
    echo mysqli_error($conn);
}

?>
<link rel="stylesheet" type="text/css" href="ext1.css">