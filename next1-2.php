<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>About me</title>
<link rel="stylesheet" type="text/css" href="ext1.css">
</head>
<body onload="startTime()"">
 <div align="right">
		
		<?php
			if(isset($_SESSION["signin"]))
			{	
					echo "<span class='user' >". $_SESSION['email']  ."&nbsp&nbsp&nbsp<a href='logout.php'>Log Out</a></span>";
			}
			else
			{
				echo "<span class='user'><a href='signin.html' target='_blank'>Log In</a>&nbsp|&nbsp<a href='signup.html' target='_blank'>Sign Up</a></span>";
			}
		?>
    </div>
<blockquote>

<table cellpadding="10">
<tr>
<td>
<h2>HTML VIDEOS</h2>
</td>
</tr>
<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 1 - Downloading a Text Editor.mp4" type="video/mp4" >
</video> </dt>
<dd>
Creating our First Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 2 - Creating our First Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Downloading a Text Editor
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 3 - body and headers.mp4" type="video/mp4" >
</video> </dt>
<dd>
Body and Headers
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 4 - Paragraphs and Line Breaks.mp4" type="video/mp4" >
</video> </dt>
<dd>
Paragraphs and Line Breaks
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 5 - Bold. Italics. and Comments.mp4" type="video/mp4" >
</video> </dt>
<dd>
Bold. Italics. and Comments
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 6 - Adding Links to our Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Adding Links to our Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 7 - Creating a Link Within a Web Page.mp4" type="video/mp4" >
</video> </dt>
<dd>
Create a Link Within a WebPage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 8 - Email Links and Tool Tips.mp4" type="video/mp4" >
</video> </dt>
<dd>
Email Links and Tool Tips
</dd>
</dl></td>
</tr>

<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 9 - Adding Images to the Webpage.mp4" type="video/mp4" >
</video> </dt>
<dd>
Adding Images to the Webpage
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 10 - Resizing Images.mp4" type="video/mp4" >
</video> </dt>
<dd>
Resizing Images
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 11 - Tables.mp4" type="video/mp4" >
</video> </dt>
<dd>
Tables
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 12 - Table Headers and Movie Stars!.mp4" type="video/mp4" >
</video> </dt>
<dd>
Table Headers and Movie Stars!
</dd>
</dl></td>
</tr>


<tr>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 13 - colspan & Annoying People.mp4" type="video/mp4" >
</video> </dt>
<dd>
Colspan & Annoying People
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 14 - Table width. cellpadding. and cellspacing.mp4" type="video/mp4" >
</video> </dt>
<dd>
Cellpadding and Cellspacing
</dd>
</dl></td>
<td>
<dl>
<dt>
<video length="300" width="300"  controls>
<source src="XHTML and CSS Tutorial - 15 - Lists.mp4" type="video/mp4" >
</video> </dt>
<dd>
Lists
</dd>
</dl></td>
<td>
<dl>
<dt>
<a href="base5.php" target="_parent"><img src="next.jpg" ></a></dt>
<dd>
Intro to CSS
</dd>
</dl></td>
</table>



<table align="right">
<tr>
<td>
<a href="me2.php" title="previous page"><img src="larrow1.png" height="50"></a>
</td>
</tr>
</table>
</blockquote>
</font>
</body>
</html>