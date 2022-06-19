<?php
session_start();
if(isset($_SESSION['loginUser'])){

echo '<br><font size="4" face="calibri" color="cyan"><marquee behavior="alternate">
 <span class="style27">::::::::</span><b></font>
 <span class="style18"><font size="4" face="calibri" color="white"></span></b><span class="style21">Emp</span><span class="style24"><span class="style22">loy</span><span class="style26">ee</span></span></font>
         <span class="style19"><font size="4">Registration</font></span>
     
         <font size="4" face="calibri" color="00ffff">::::::::</marquee></font></marquee>';

echo '<br><br><table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td><font face="microsoft tai Le" size="5" color="cyan"> <b> You are Logged as </font> <font face="microsoft tai Le"    size="5" color="lime"> '.$_SESSION['loginUser'].'</b>!!
   </font> </td>
   <td> <a href="Logout.php"><img src="Picture/Logout.png" width="50"    height="50"> </a>  Logout to Press
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="5" color="White"> <b>Main Page</b></font>
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="#CC33FF"></td>
   </tr>
   <tr>
   <td aligin="center"> <a href="Save.php"><img src="Picture/ag2z1-9zj77-001.png" width="100" height="100">
   <font face="calibri" font-size="large" color="white">Save</font></a>
   </td>
   
   <td aligin="center"> <a href="Search.php"><img src="Picture/brp-research-paper@2x.png" width="100" height="100">
   <font face="calibri" font-size="large" color="white">Search</font></a>
   </td>
   
   </tr>
   </table>';
   
	                             }

								 
         
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--

.style21 {
	color: #FF0066;
	font-weight: bold;
	font-size: large;
	font-family: "Bookman Old Style";
}
.style22 {color: #FFFFFF}
.style24 {font-size: large; font-family: "Bookman Old Style"; color: #FF0066;}
.style26 {color: #0099FF; font-weight: bold; font-size: large; font-family: "Bookman Old Style"; }
.style27 {color: #00FFFF}


body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000099;
}
-->
</style></head>

<body>
<p>&nbsp;</p>

</body>
</html>
