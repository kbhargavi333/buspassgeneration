<?php
include('connection.php');
$userid=$_POST['username'];
$password=$_POST['password'];

 
   $sql="select username,password,type from login where username='$userid' and password='$password'";
    
    $rs=mysqli_query($conn,$sql);
$l=0;

    while($myrow=mysqli_fetch_array($rs))
     {
 
	  
        $u=$myrow[0]; $p=$myrow[1];$type=$myrow[2];

$l++;
   		
      }

if($l >0)
{
		session_start();
    	$_SESSION['uname'] = $userid;
    	 $_SESSION['type'] = $type;
    	session_register("type");
	    session_register("userid");
      }
      
      

	    if($userid !='' && $password==$p && $password !='')
	    {
	     session_start();
    	$_SESSION['uname'] = $userid;
    	 $_SESSION['type'] = $type;
    	session_register("type");
	    session_register("userid");
		session_register("password");
       	header('Location:login2.html');
       	$ip=$_SERVER['REMOTE_ADDR'];
       	
       	}
       	  
	 

	else
	header('Location:login.html');
	   		  ?>

