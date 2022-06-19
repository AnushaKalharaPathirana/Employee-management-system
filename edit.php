
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
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"> <b> EDIT RECORD </b>   </font>
   </td>
   </tr>
   <tr>
   <td  colspan="2" bgcolor="#CC00FF" align="right"><a href ="main.php"><img src = "picture/home.png"    width="40"   height="40"></a></td>
   </tr>';
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
.style28 {
	color: #FFFF00;
	font-size: 18px;
	font-weight: bold;
}
.style32 {font-family: "microsoft tai Le"; font-size: 16px; color: #000000; font-weight: bold; }
.style34 {font-family: "microsoft tai Le"; font-size: large; color: #FFFFFF; font-weight: bold; }

.style22 {color: #FFFFFF}
.style24 {font-size: large; font-family: "Bookman Old Style"; color: #FF0066;}
.style26 {color: #0099FF; font-weight: bold; font-size: large; font-family: "Bookman Old Style"; }
.style27 {color: #00FFFF}

-->
</style></head>

<body>
<?php

	$conn = mysqli_connect('localhost','root','','hnd_20_proj');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	         }
    else{
	   
	   if(isset($_GET['id'])){
	     
		 $eid = $_GET['id'];
	                         }
       if(isset($_POST['btnupdate'])){
	     $name = $_POST['txtname'];
		 $nic = $_POST['txtnic'];
		 $gen = $_POST['rbgen'];
		 $con = $_POST['txtcon'];
		 $add = $_POST['txaadd'];
		 
      $queUp = "UPDATE empdtls SET EmpName='$name',NIC ='$nic',Gender='$gen',Contact='$con',EAddress='$add'      WHERE EmpID = '$eid'";
		
		if(mysqli_query($conn,$queUp)){

           header("Location:DisConf.php");
		   
		                              }
									  
								}
        $qt = mysqli_query($conn,"SELECT *FROM empdtls WHERE EmpID = '$eid'");
		$qp = mysqli_fetch_assoc($qt);		
?>	                         
	
	    
 <tr>
      <td colspan="2" align="center">
            <form method="post" action="">
                <table border="0" width="60%" cellpadding="5" cellspacing="0" align="center">
                    <tr>
                       <td colspan="2">
                   <h4 class="style28">                     <font face="microsoft tai Le">Edit Records of <?php echo $eid; ?>                      </font> </h4></td>
                  </tr>
                  <tr> 
                 <td><span class="style34">Employee Name</span></td>
               <td><input type="text" name="txtname" class="style32" value="<?php echo $qp['EmpName'];?>"/></td>
                  </tr>
                  
                   <tr> 
                 <td><span class="style34">NIC</span></td>
                 <td> <input type="text" name="txtnic" class="style32" value="<?php echo $qp['NIC'];?>"/>                 </td>
                  </tr>
                  
                   <tr> 
                 <td><span class="style34">Gender</span></td>
                 
                 <td>
                 <input type="radio" name="rbgen" value="Male" <?php echo ($qp['Gender']=='Male')?'
				 checked="checked"':'' ?>size="17">Male
				 
                 <input type="radio" name="rbgen" value="Female" <?php echo ($qp['Gender']=='Female')?'
				 checked="checked"':'' ?>size="17">Female				 </td>
                 </tr>
                  
                   <tr> 
                 <td><span class="style34">Contact No</span></td>
                 <td> <input type="text" name="txtcon" class="style32" value="<?php echo $qp['Contact'];?>"/></td>
                  </tr>
                  
                  <tr> 
                 <td><span class="style34">Address</span></td>
                 <td> <textarea name="txaadd" cols="30" rows="4" class="style32" id="txaadd" ><?php echo $qp
				 ['EAddress'];?></textarea></td>
                  </tr>
                  <tr>
                  <td>&nbsp;</td>
                  <td align="left"><input type="submit" name="btnupdate" class="style21" value="UPDATE"/>                  </td> 
                  </tr>
                 </table>
    
            </form>
    </td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="lime"></td>
    </tr>
	</table>
    
<?php
      }
?>

</body>
</html>