<?php
include 'connect.php';
global $conn;
if(isset($_GET['search']))
{
    $search=$_GET['search'];
if(!empty($search))
{
$query="Select username from review where review like '".mysqli_real_escape_string($conn,$search)."%'";
if($result=mysqli_query($conn, $query))
{
    while($row=  mysqli_fetch_array($result))
    {
        echo $row['username']."<br>"; 
    }
}

    }
}
?>