<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  if (isset($_SESSION['loginUser'])){
  
      $conn=mysqli_connect('localhost','root','','hnd_20_proj');
	  if($conn){
	       $run=$_SESSION['loginUser'];
		   $queSel="SELECT RealName,Max(LogID) FROM logsrc WHERE RealName='$run' GROUP BY RealName ORDER BY           LogID DESC LIMIT 1";
		   
		   if(mysqli_query($conn,$queSel)){
		        $qres = mysqli_query($conn,$queSel);
				while($rv = mysqli_fetch_array($qres)){
				  $un=$rv["RealName"];
				  $un=$rv["Max(LogID)"];
				 
				$queupdat="UPDATE logsrc SET Logout=(now()) WHERE LogID='$id'";
				 
				if(mysqli_query($conn,$queupdat)){
				       
					   session_destroy();
					   header("location:Login.html");
												  }
				                               }
		                                  }
	           }
	  
                                  }
?>

</body>
</html>
