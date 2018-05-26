<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Cloth Shopping</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
body {
margin : 0;
padding : 0;
text-align : left;
font : 75% "Trebuchet MS", verdana, arial, sans-serif;
line-height : 1.5em;
background : #BCE0A8 url(img/bg.jpg) top center repeat-y;
color : #000;
}
			/*CONTAINER*/
#wrapper 
{
position : relative;
width : 780px;
margin-right : auto;
margin-left : auto;
padding : 0;
border : 0px solid green;
background : #fff;
}
			/*TOP TITLE BAR*/
#title {
width : 770px;
margin-left : 5px;
padding : 0;
text-align : right;
background : #fff;
color : #000;
}
#title h1 {
margin : 0;
padding : 10px;
font-size : 175%;
text-transform : uppercase;
letter-spacing : 5px;
background : inherit;
color : #BCE0A8;
}
			/*BANNER*/
#header {
background : url(images/header.jpg) no-repeat;
width : 770px;
height : 200px;
margin : 0 0 0 5px;
padding : 0 0 0 0;
}
			/*TOP NAVIGATION*/
.container {
width : 770px;
height : 35px;
margin : 20px 0 10px 5px;
background-color:#669933;
color:#FFFFCC;
}
#navCircle {
margin : 0;
padding : 0 0 20px 20px;

}
#navCircle li {
margin : 0;
padding : 0;
display : inline;
list-style-type : none;
margin-top:5px;
}
#navCircle a:link, #navCircle a:visited {
float : left;
font-size : 1.3em;
padding : 0 25px 15px 25px;
text-decoration : none;
background : inherit;
color:#FFFFCC;
margin-top:5px;
}
#navCircle a:link.active, #navCircle a:visited.active, #navCircle a:hover {
background-color : inherit;
color : #FFFFCC;

}
			/*MAIN CONTENT*/
#content {
width : 560px;
float : left;
margin-top : 0;
margin-left : 11px;
padding : 5px;
border-right : 1px solid #b2d094;
}
#content p {
padding : 0 20px;
}
			/*SIDEBAR*/
#right-col {
width : 175px;
margin : 5px 0 0 590px;
border-left : 1px none #28460a;
padding : 3px;
}
			/*FOOTER*/
#footer {
margin : 50px 0 0 0;
padding : 5px;
font : 90% "Trebuchet MS", verdana, arial, sans-serif;
background : #4b692d;
color : #fff;
}
#footer a:link, #footer a:visited {
background : inherit;
color : #b2d094;
}
#footer a:hover {
background : inherit;
color : #fff;
text-decoration : none;
}
			/*SCROLLBAR*/
div.scroll {
height : auto;
width : 160px;
padding : 1ex;
margin : 0 0 30px 5px;
border : 1px solid #345411;
background : #BCE0A8;
color : #000;
}
			/*TYPOGRAPHY*/
h2 {
margin : 20px;
font-size : 140%;

letter-spacing : 3px;
background : inherit;
color : green;
}
h3 {
margin : 5px;
font-size : 120%;
letter-spacing : 5px;
background : inherit;
color : green;
}
blockquote {
font-weight : bold;
font-style : italic;
color : #b29b35;
}
			/*LINKS*/
a img {
border : none;
}
a:link, a:visited {
text-decoration : none;
background : inherit;
color : #457C05;
}
a:hover {
text-decoration : underline;
background : inherit;
color : #666;
}
ul.side {
list-style-type : square;
padding : 0;
margin : 0;
background : inherit;
color:#660000;
}
.side li {
padding-left : 0.2em;
margin-left : 2em;
color:#660000;
}
			/*CLASSES*/
.news {
font-size : 90%;
background : inherit;
color : #000;
}
.imgleft {
float : left;
border : 1px solid #345411;
padding : 5px;
margin-right : 15px;
}
.imgright {
float : right;
border : 1px solid #345411;
padding : 5px;
margin-left : 15px;
}
-->

</style>
<script type="text/javascript" src="xbMarquee.js"></script>
</head>

<body>

<div id="wrapper">
  
<?php include "Header.php";?>
  
<div id="content">
<div class="w3-content w3-section" style="max-width:500px">

  <img class="mySlides w3-animate-fading" src="img/d.jpg" style="width:100%;height: 250px">
  <img class="mySlides w3-animate-fading" src="img/e.jpg" style="width:100%;height: 250px">
  <img class="mySlides w3-animate-fading" src="img/f.jpg" style="width:100%;height: 250px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>
<script type="text/javascript">
<!--
	//set the marquee parameters
	function init() { ltr_marquee.start(); }
	var ltr_marquee_Text = '<h2><span style="color:#4169E1"> Welcome to our store!</span></h2>';
	var ltr_marquee_Direction = 'right';
	var ltr_marquee_Contents='<span style="font-family:Comic Sans MS;font-size:12pt;white-space:nowrap;">' + ltr_marquee_Text + '</span>';
	ltr_marquee = new xbMarquee('ltr_marquee', '39px', '90%', 6, 100, ltr_marquee_Direction, 'scroll', ltr_marquee_Contents);
	window.setTimeout( init, 200);
-->
</script>

<p><span class="style8">W</span>elcome to <b>OnlineShopping</b>! Here you can buy various clothing items such as Jeans, T-Shirts, Shirts and Trousers of well known brands. Customer has to just register on this website and then he or she can buy various cloth products online. It will save you a trip to a shopping mall!!</p>

<p>We provide only the best quality cloth. If you have any complain regarding your order, please feel free to contact us, to enable us to improve our services.</p>

<table width="100%" border="0" cellspacing="3" cellpadding="3">

<tr>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>

<tr>
    <td><p><img src="img/Jeans.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
    <td><p><img src="img/asd.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
    <td><p><img src="img/images.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
</tr>

<tr>
    <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">Jeans</div></td>
    <td bgcolor="#BCE0A8"><div align="center" class="style9">Blazers</div></td>
    <td bgcolor="#BCE0A8"><div align="center" class="style9">T-Shirts</div></td>
</tr>

</table>
<br><br>
<h2><span style="color:#4169E1">Comming Soon...</span></h2>

<p><span class="style8">W</span>e will be adding some more items very soon. Take a glance at the products that will be added.</p>

<table width="100%" border="0" cellspacing="3" cellpadding="3">

<tr>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>

<tr>
    <td><p><img src="img/phone.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
    <td><p><img src="img/laptop.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
    <td><p><img src="img/speaker.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
</tr>

<tr>
    <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">Smart Phones</div></td>
    <td bgcolor="#BCE0A8"><div align="center" class="style9">Laptops</div></td>
    <td bgcolor="#BCE0A8"><div align="center" class="style9">Speakers</div></td>
</tr>

</table>

<p>&nbsp;</p>

</div>
<?php include "Right.php";?>

<div style="clear:both;"></div>

<?php include "Footer.php";?>

</div>

</body>
</html>
