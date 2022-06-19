<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employement</title>
<style type="text/css">
<!--
body,td,th {
	color: #00FFFF;
}
body {
	background-color: #000099;
}
-->
</style></head>

<body>
<?php
  $un=$_POST['txtUn'];
  $pw=$_POST['txtPw'];
   if(!empty($un) && !empty($pw)){
   $conn=mysqli_connect('localhost','root','','hnd_20_proj');
    if ($conn){
       $searchQue = "SELECT * FROM  user WHERE Username = '$un'";
       if (mysqli_query($conn,$searchQue)){
           $dress = mysqli_query($conn,$searchQue);
            if(mysqli_num_rows($dress)>0){
			   $rowValue = mysqli_fetch_array($dress);
			   if($rowValue ["Username"]==$un && $rowValue["Password"]==$pw){
			   $_SESSION['loginUser']= $rowValue["RealName"];
			   $run = $rowValue["RealName"];
			   
			  $queUp="INSERT INTO logsrc(RealName,login) VALUES('$run',(now()))";
              if(mysqli_query($conn,$queUp)){
			   
   //echo' <b> <font size="6" face="microsoft tai Le" color="cyan"><align="center"> Update the Shedule!!</b>   </font>'
	header("Location:main.php");

			   
			   }

          }
		  else
		  {
		  echo'Incorect Username or Password';
		  }
		  }
		else{
		echo'Please Sign Up Before Login to the System!';

		}
		   }
               }
			         
else{
             
echo 'Database Under Construction';
}
                     }

else{
     echo'Username or Password can not be Blank!!';
	            
}

  
								 
?>
</body>
</html>