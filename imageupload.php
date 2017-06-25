<?php
include 'connect.php';
global $conn;
if(isset($_FILES['file']['name']))
{
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    
    $tmp_name=$_FILES['file']['tmp_name'];
    $exten=  explode('.', $name);
    @$exname=$exten[0];
    @$extension=strtolower($exten[1]);
    //$extension=  strtolower(substr($name,  strpos($name, '.')+1));
    $max=2097152;
    if(!empty($name))
    {
        if($size>$max)
            {
            echo 'Limit exceeded';
            }
 else {
        if(($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg')
        {
            //move_uploaded_file($tmp_name, $name);
            move_uploaded_file($tmp_name, 'original/'.$exname.'_'.$_SESSION['user_id'].'.jpg');
                if(isset($_POST['cb']))
                {
                    include 'genwatermark.php';
                    addwatermark($name);
                //echo "<img src='genwatermark.php?image=".$name."'>";
                    include 'genthumbnail.php';
               // $final='uploads/'.$name;
                    thumbnail($name);
                //echo "<img src='genthumbnail.php?src='".$name."'>";
                    $query="Insert into images values('','".$_SESSION['user_id']."','".$exname.'_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_th_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_wm_'.$_SESSION['user_id'].'.jpg'."')";
                    if($result=  mysqli_query($conn, $query))
                        {
                                echo "<script>alert('Image uploaded successfully');";
                                echo "alert('File size : '.$size.'bytes');</script>";
                                header("location:ndetails.php");
                            }else{
                                echo mysqli_error($conn);
                            }
        }  else {
            
                    
                    include 'genthumbnail.php';
                    thumbnail($name);
                    $query="Insert into images values('','".$_SESSION['user_id']."','".$exname.'_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_th_'.$_SESSION['user_id'].'.jpg'."','')";
                    if($result=  mysqli_query($conn, $query))
                        {
                                echo "<script>alert('Image uploaded successfully');";
                                echo "alert('File size : '.$size.'bytes');</script>";
                                header("location:ndetails.php");
                            }else{
                                $_SESSION['fail_msg']="mysqli_error($conn)";
                            }
        }
                            }  else {
        echo 'Your file is of type: '.$extension.'<br>';
        echo 'File must be of type: jpg/jpeg';
    }
           }
        }
    else
    {
        echo "<script>alert('Please choose a file')</script>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            div.i{
                padding-left:50px;
                padding-right:80%;
                //padding-top:5%;
                }
        </style>
    </head>
    <body>
        <div class="i">
            <blockquote>
        <fieldset>
            <form method="POST" action="ndetails.php" enctype="multipart/form-data">
            
            <table cellspacing="15">
                <tr><td><input type="file" name="file"></td></tr>
                <tr><td><font size="2">(Size should be less than 2MB)</font></td></tr>
                <tr><td><center><input type="checkbox" name="cb">Apply Watermark</center></td></tr>
            <tr><td><center><input type="submit" class="buttons1" name="submit" value="Upload"></center></td></tr>
            </table>
        </form>
            <a href="nimages.php">Show Images</a>&nbsp&nbsp<a href="nthumbimages.php">Shorter version</a><br>
            <center><a href="nwaterimages.php">Watermarked images</a></center>
        </fieldset></blockquote>
        </div>
        </body>
</html>
