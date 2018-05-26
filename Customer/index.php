<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP TILL YOU DROP</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#003300"> Welcome  <?php echo $_SESSION['Name'];?></span></h2>
    <p align="justify">&nbsp;</p>
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
 <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
