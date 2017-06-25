<?php
//include 'genwatermark.php';
//addwatermark('gb.jpg');
//session_start();
//include 'captcha.php';
//$_SESSION['secure']=  rand(1000, 9999);
include 'genthumbnail.php';
thumbnail('gb.jpg');
?><!--<img src='genwatermark.php?source=gb.jpg'>
<img src='captcha.php'>-->
<img src='genthumbnail.php?image=gb.jpg'>