<?php
include 'connect.php';
include'logincheck.inc.php';
global $conn;
$query="Select images from images where user_id='".$_SESSION['user_id']."'";
if($result=  mysqli_query($conn, $query))
{
    if(mysqli_num_rows($result)==0)
    {
        echo 'No images uploaded';
    }else{
            while($row=  mysqli_fetch_array($result))
                {
                    echo "<img src='original/".$row['images']."' height=200 width=300>";
                }
        }
    }  
else
{
    echo 'There is some error';
}

?>
<link rel="stylesheet" type="text/css" href="ext1.css">
