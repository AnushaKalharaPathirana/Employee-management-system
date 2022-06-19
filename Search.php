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
   <td><font face="microsoft tai Le" size="5" color="cyan"> <b> You are Logged as </font> <font face="microsoft tai Le"    size="5" color="#33FF99"> '.$_SESSION['loginUser'].'</b>!!
   </font> </td>
   <td> <a href="Logout.php"><img src="Picture/Logout.png" width="50"    height="50"> </a>  Logout to Press
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"> <b>SEARCH EMPLOYEE </b>   </font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC00FF" align="right"><a href ="main.php"><img src = "picture/home.png" width="40"   height="40"></a></td>
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
body {
	background-color: #000099;
}
body,td,th {
	color: #FFFFFF;
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

.style1 {
	color: white;
	font-family: calibri;
	font-size: x-large;
	font-weight: bold;
}
.style2 {
	font-family: "microsoft tai Le";
	font-weight: bold;
	font-size: large;
	color: #FF0066;
}

.style7 {
	color: #000000;
	font-family: calibri;
	font-size: large;
	font-weight: bold;
}
.style8 {color: #000000; font-family: calibri; font-size: x-large; font-weight: bold; }
-->
</style></head>

<body>
<?php
echo'<tr>
    <td colspan="2" align="center">
	<form id="form1" name="form1" method="post" action="SearchPro.php">
  <table width="41%" height="127" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="33%" height="56"><div align="center"><span class="style1">SEARCH</span></div></td>
      <td width="46%"><div align="center">
        <input name="txteid" type="text" class="style7" id="txteid" size="18" maxlength="12" />
      </div></td>
      <td width="21%">
	  <div align="center">  
	  <td aligin="center"> <a href="Search.php"><img src="Picture/brp-research-paper@2x.png" width="80"      height="80"></a>
    </tr>
    <tr>
      <td class="style8">&nbsp;</td>
      <td><label>
        <div align="center">
          <input name="btnsrc" type="submit" class="style2" id="btnsrc" value="Search" />
        </div>
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
    </td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="lime"></td>
    </tr>
	</table>';
?>
</body>
</html>
