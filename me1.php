<?php
//include 'header.php';
include 'logincheck.inc.php';
?>
<html>
<head>
<title>HTML TUTORIALS</title>
<link rel="stylesheet" type="text/css" href="ext1.css">
</head>
<body >
<blockquote> 
<img id="i1" src="HTML.jpg" /> stands for Hypertext Markup Language, and it is the most widely used language to write Web Pages.
<ul >
<li>Hypertext refers to the way in which Web pages (HTML documents) are linked together. Thus, the link available on a webpage is called Hypertext.</li>
<li>As its name suggests, HTML is a Markup Language which means you use HTML to simply "mark-up" a text document with tags that tell a Web browser how to structure it to display.</li>
</ul>
<p>Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information <br />between researchers.</p>
<p>Now, HTML is being widely used to format web pages with the help of different tags available in HTML language.</p>
<span><h2>HTML Tags</h2></span>
<hr />
As told earlier, HTML is a markup language and makes use of various tags to format the content. These tags are enclosed within angle braces. Except few tags, most of the tags have their corresponding closing tags.
<p>HTML document uses the following tags:</p>
<p><img src="tags.jpg" /></p>
To learn HTML, you will need to study various tags and understand how they behave, while formatting a textual document. Learning HTML is simple as users have to learn the usage of different tags in order to format the text or images to make a beautiful webpage.
World Wide Web Consortium (W3C) recommends to use lowercase tags starting from HTML 4.<br />
<span><h2>HTML Elements</h2></span>
<hr />
An HTML element is defined by a starting tag. If the element contains other content, it ends with a closing tag, where the element name is preceded by a forward slash as shown below with few tags:<br/>
<p><img src="elements.jpg" /></p>
<div style="float: right"></div>
<table cellpadding="10">
<tr>

<?php
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
	echo "<td>
<dl>
<dt>
<a href='ncssvideo.php'><img src='images.png' /></a>
 </dt>
<dd>
Watch CSS Video Tutorials
</dd>
</dl></td>
<td>
<dl>
<dt>
<a href='nhtmlvideo.php'><img src='htmllogo.png' /></a>
 </dt>
<dd>
Watch HTML Video Tutorials
</dd>
</dl></td>
<td>
<dl>
<dt>
<a href='q114.xml'><img src='coding.png' height='180' width='400'/></a>
 </dt>
<dd>
Pursuing For More Programming Languages
</dd>
</dl></td>
<center><a href='nReview.php' ><img src='submit.png' ></a></center> "
        ;
}
else{
	echo "<div style='float:left ;padding-left:10%'>
<dl>
<dt>
<a href='nhtmlvideo.php'><img src='htmllogo.png' /></a>
 </dt>
<dd>
Click here for HTML Video Tutorials
</dd>
</dl></div>
<div style='float:right; padding-right:5%'><blockquote><a href='nReview.php' ><img src='submit.png' ></a></blockquote></div>
";
}

?></tr></table>
</td>
</blockquote>
    <?php
//include 'footer.php';
?>
</body>
</html>