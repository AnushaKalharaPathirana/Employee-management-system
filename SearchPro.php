<?php
session_start();
if(isset($_SESSION['loginUser'])){

echo '<br><font size="4" face="calibri" color="cyan"><marquee behavior="alternate">
 <span class="style27">::::::::</span><b></font>
 <span class="style18"><font size="4" face="calibri" color="white"></span></b><span class="style21">
 Emp</span><span class="style24"><span class="style22">loy</span><span class="style26">ee</span></span></font>
         <span class="style19"><font size="4">Registration</font></span>
         <font size="4" face="calibri" color="00ffff">::::::::</marquee></font></marquee> <br><br>';
		 
echo '<br><br><table border="0" width="75%" cellpadding="10" align="center">
   <tr>
   <td><font face="microsoft tai Le" size="5" color="cyan"> <b> You are Logged as </font> <font    face="microsoft tai Le"    size="5" color="#33FF99"> '.$_SESSION['loginUser'].'</b>!!
   </font> </td>
   <td> <a href="Logout.php"><img src="Picture/Logout.png" width="50" height="50"> </a>  Logout to Press
   </td>
   </tr>
   <tr>
   <td colspan="2" bgcolor="Indigo"><font face="calibri" size="6" color="White"> <b>SEARCH EMPLOYEE </b>   </font>
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
body {
	background-color: #000099;
}
body,td,th {
	color: #FFFFFF;
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
echo'<tr>
    <td colspan="2" align="center">';
	$conn = mysqli_connect('localhost','root','','hnd_20_proj');
	if(!$conn){
	
	echo 'Database Connection Error',mysqli_error($conn);
	         }
    else{
	  $empno=$_POST['txteid'];
	  $queSearch="SELECT * FROM empdtls WHERE EmpID='$empno'";
	  
	  if(!mysqli_query($conn,$queSearch)){
	          echo 'Data connot be search at this moment',mysqli_error($conn);
			  
	         }
	   else{
	   $res=mysqli_query($conn,$queSearch);
               if(mysqli_num_rows($res)>0){
			   
       echo '<table cellspacing="0" cellpadding="5" align="center" bordercolor="tomato" border="0"             width=100%>
		   
           <tr>
           <td><font face="microsoft tai Le" size="4"><b>Employee ID</b></td></font>
           <th><font face="microsoft tai Le" size="4"><b>Employee Name</b></th></font>
           <th><font face="microsoft tai Le" size="4"><b>NIC</b></th></font>
           <td><font face="microsoft tai Le" size="4"><b>Gender</b></td></font>
           <th><font face="microsoft tai Le" size="4"><b>Contact No</b></th></font>
           <th><font face="microsoft tai Le" size="4"><b>Address</b></th></font>
           <td>&nbsp</th>
           <th>&nbsp</th>
           </tr>';

         while($rv=mysqli_fetch_assoc($res)){
		    
			
			$name=$rv['EmpName'];
            $nic=$rv['NIC'];
            $gen=$rv['Gender'];
            $con=$rv['Contact'];
            $add=$rv['EAddress'];
			
            echo'<tr>
			<tr bgcolor="#000066">
            <td><font face="microsoft tai Le" size="3">'.$empno.'</td>
            <td><div align="center"><font face="microsoft tai Le" size="3">'.$name.'</td>
            <td><font face="microsoft tai Le" size="3">'.$nic.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$gen.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$con.'</td>
            <td> <div align="center"><font face="microsoft tai Le" size="3">'.$add.'</td>
			
   <td>
   <a href="edit.php?id='.$empno.'"><img src="Picture/pencil1.png" width="55" height="50"></a>
   </td>
   <td>
   <a href="delete.php?id='.$empno.'"><img src="Picture/Bin.png" width="45" height="45"></a>
   </td>
            
   </tr>';
 
                      }
		echo'</table>';
		
					  
 
 
	                    }
			else{
				  echo '<font size = "4" face="microsoft tai Le" ><b> Employee ID:'.$empno.' not in the                   database!!</b></font>
				  <br></br>
				  <a href = "Search.php"><img src = "picture/back.png" width="50" height="50"></a>';
				 } 
				
		       }
	                  }
	
   echo'</td>
    </tr>
	 <tr>
     <td  colspan="2" bgcolor="lime"></td>
    </tr>
	</table>';
?>
<strong></strong>
</body>
</html>