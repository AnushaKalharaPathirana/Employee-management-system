<?php
session_start();
if(isset($_SESSION['loginUser'])){

echo '<br><font size="4" face="calibri" color="cyan"><marquee behavior="alternate">
 <span class="style27">::::::::</span><b></font>
 <span class="style18"><font size="4" face="calibri" color="white"></span></b><span class="style21">
 Emp</span><span class="style24"><span class="style22">loy</span><span class="style26">ee</span></span></font>
         <span class="style19"><font size="4">Registration</font></span>
         <font size="4" face="calibri" color="00ffff">::::::::</marquee></font></marquee>
		 
<table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td><font face="microsoft tai Le" size="5" color="cyan"> <b> You are Logged as </font> <font    face="microsoft tai Le"    size="5" color="#33FF99"> '.$_SESSION['loginUser'].'</b>!!
   </font> </td>
   <td> <a href="Logout.php"><img src="Picture/Logout.png" width="50" height="50"> </a>  Logout to Press
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"> <b> DELETE RECORD </b>   </font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC00FF" align="right"><a href ="main.php"><img src = "picture/home.png"    width="40"   height="40"></a></td>
   </tr>
   
   <tr>
   <td colspan="2" align="center">';
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000099;
}

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
</style></head>

<body>
<?php
 $conn = mysqli_connect ('localhost','root','','HND_20_Proj');
 if($conn){
 
     if(isset($_GET['id'])){
   
          $eid=$_GET['id'];
		  
		        $quedel= "DELETE FROM empdtls WHERE EmpID = '$eid'";
		  
		     if(mysqli_query($conn,$quedel) ){
		  
		  echo ' <b> <font size="4" face="microsoft tai Le">Employee ID:'.$eid.' Sucessfully Deleted!!                 </font></b><br></b>
		          <br>
		  
		  <a href="search.php"><img src="Picture/back.png" width="50" height="50"></a>';
		                                  
										     }
                           } 
						  
          }
		    
	echo'
		  </td>
		      <tr>
		  <td  colspan="2" bgcolor="lime"></td>
		      </tr>
		  </table>';
	 
	 
	 
?>
</body>
</html>