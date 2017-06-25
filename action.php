<?php
session_start();
include_once('connect.php');
global $conn;
if(isset($_POST['Delete'])){
    echo"<script>confirm('Are you sure to delete users?')</script>";
    $idArr = $_POST['checked_id'];
    //$result=  mysqli_query($conn, "delete from users where id='".$_SESSION["user_id"]."'");
    $name=  mysqli_query($conn, "Select * from images where user_id='".$_SESSION['user_id']."'");
    if(count($idArr)>0)
    {
    foreach($idArr as $id){
        mysqli_query($conn,"DELETE FROM users WHERE id=".$id);
        while($filename=  mysqli_fetch_array($name))
        {
            $image=$filename['images'];
            $thumb=$filename['thumbnail'];
            $water=$filename['watermark'];
            if(file_exists('original/'.$image))
            {
                unlink('original/'.$image);
            }
            if(file_exists('thumbnails/'.$thumb))
            {
                unlink('thumbnails/'.$thumb);
            }
            if(file_exists('uploads/'.$water))
            {
                unlink('uploads/'.$water);
            }
                
          }
          mysqli_query($conn, "delete  from review where user_id=".$_SESSION['user_id']);
          mysqli_query($conn, "delete from images where user_id=".$_SESSION['user_id']);
}
    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
header("Location:nadmin.php");}
else{
    $_SESSION['success_msg'] = 'No users selected.';
        header("Location:nadmin.php");
}
}else{
    //$_SESSION['success_msg'] = 'Select the Users you want to delete.';
    header("Location:ndetails.php");
}
?>