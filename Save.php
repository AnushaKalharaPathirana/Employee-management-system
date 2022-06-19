<?php
session_start();
if(isset($_SESSION['loginUser'])){

echo '<br><font size="4" face="calibri" color="cyan"><marquee behavior="alternate">
 <span class="style27">::::::::</span><b></font>
 <span class="style18"><font size="4" face="calibri" color="white"></span></b><span class="style21">Emp</span><span class="style24"><span class="style22">loy</span><span class="style26">ee</span></span></font>
         <span class="style19"><font size="4">Registration</font></span>
     
         <font size="4" face="calibri" color="00ffff">::::::::</marquee></font></marquee>';
		 
echo '<br><br>


<table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td><font face="microsoft tai Le" size="5" color="cyan"> <b> You are Logged as </font> <font face="microsoft tai Le"    size="5" color="#33FF99"> '.$_SESSION['loginUser'].'</b>!!
   </font> </td>
   <td> <a href="Logout.php"><img src="Picture/Logout.png" width="50"    height="50"> </a>  Logout to Press
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"> <b>EMPLOYEE REGISTRATION SYSTEM</b>   </font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC00FF" align="right"><a href ="main.php"><img src = "picture/home.png" width="40" height="40"></a></td>
   </tr>
   <tr>';
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.error{

    color:#FF0000;
	   
	   }
body {
	background-color: #000099;
}

.style1 {
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: x-large;
}
.style2 {
	font-family: "microsoft tai Le";
	font-weight: bold;
}
.style9 {font-family: calibri; font-weight: bold; color: #FF0066; font-size: large; }
.style11 {
	font-family: "calibri";
	font-size: large;
	color: black;
}
.style14 {font-family: "microsoft tai Le"; font-size: large; color: #FFFFFF; }
body,td,th {
	color: #FFFFFF;
}
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
-->
</style>
</head>
<body>





<tr>
    <td colspan="2" align="center"> 
	<form id="form1" name="form1" method="post" action="SavePro.php" >
	  <div align="left"></div>
	  <table width="49%" border="0" align="center" cellpadding="8" cellspacing="0">
 
    <tr>
      <td width="33%"><span class="style2">Employee ID</span></td>
      <td width="67%"><label>
        <input name="txtempid" type="text" class="style11" id="txtempid" size="12" maxlength="10" />
       
    </tr>
    <tr>
      <td><span class="style2">Employee Name</span></td>
      <td><input name="txtempname" type="text" class="style11" id="txtempname" size="30" maxlength="100" />
      
      </td>
    </tr>
    <tr>
      <td><span class="style2">NIC</span></td>
      <td><input name="txtnic" type="text" class="style11" id="txtnic" size="15" maxlength="12" /></td>
    </tr>
    <tr>
      <td><span class="style2">Gender</span></td>
      <td><label>
        <input name="rbgen" type="radio" id="radio" value="Male" />
        <span class="style2">Male</span>
        <input type="radio" name="rbgen" id="radio" value="Female" />      
        <span class="style2">Female</span></label></td>
    </tr>
    <tr>
      <td><span class="style2">Contact No</span></td>
      <td><input name="txtcon" type="text" class="style11" id="txtcon" size="12" maxlength="10" /></td>
    </tr>
    <tr>
      <td><span class="style2">Address</span></td>
      <td><textarea name="txtadd" cols="30" rows="4" class="style11" id="txtadd"></textarea></td>
    </tr>
    <tr>
      <td><label>
        <input name="btncl" type="reset" class="style9" id="btncl" value="CLEAR" />
      </label></td>
      <td><label>
	   <div align="center">
        <input name="btnsave" type="submit" class="style9" id="btnsave" value="SAVE" />
      </label></td>
    </tr>
   
  </table>
 
</form>
  </td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="lime"></td>
    </tr>
	</table>

</body>
</html>