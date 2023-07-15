<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <script src="scriptuser.js"></script>
<style>
    *{
        box-sizing: border-box;  
        
    }
    .word{
        color: blue;
        margin-top: 5px;
        padding-top: 9px;
       
        
    }
    .register{
        text-align: center;
    font-size: 40px;

    }
    
    form{
        
        background-color:cornsilk;
    
        margin: auto;
        text-align: center;
    
       
      
    }
    .logo1{
height: 55px;
width:55px ;
padding-top: 0px;
text-align: center;
display: block;



    }
    h3{
        text-align: center;
    }
    body{
        background-color: #f2f6ff;
    }
    .form{
        border: solid 1px black;
    }
    .wrapper {
  
  display: flex;
  display: inline-flex;
  gap: 50px;
  order: 3;
  flex-wrap: wrap;

}
.p1{
    color: white;
    font-size: 25px;
    border: 1px solid black;
    background-color: #2b2a2c;

    border-radius: 20px;
    
}

.p1class{

    
    text-align: center;
    
}
body{
    background-color: aliceblue;
}
.left{
    margin-left: -140px;
}
#route1{
    margin-top: -100px;
    margin-left: 230px;
}

#left{
    float: left;
}
.right{
    float:right;
    margin-top: -57px;
    margin-left: 120px;
}
.input1{
    margin-left: -140px;
}
.input2{
    margin-left: -70px;
}
.input3{
    margin-left: -120px;
}
.output{
    margin-left: 0px;
}
.input5{
    margin-left: -5px;
}
.pass{
margin-top: 22px;
}
#filelabel{
    font-size: 20px;
    margin-left: -210px;

}
#fileinput{
    text-align: center;
    margin-left: 45%;
    margin-right: 55%;
    margin-top: -32px;
    }
    #submit:hover {
                font-size: 30px;
                backdrop-filter: blur(10px);
                
                color: white;
            }
            body{
                background-image: url('https://i0.wp.com/www.residentswatch.in/wp-content/uploads/2018/09/Screen-Shot-2018-09-07-at-1.57.00-PM.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; 

            }
        form{

            background-image: url('https://i0.wp.com/www.residentswatch.in/wp-content/uploads/2018/09/Screen-Shot-2018-09-07-at-1.57.00-PM.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
        }
</style>
    </head>
    <body class="container-fluid" >
       
<form name=frm action=payment.php method=post>
    <table>
        <tr>
            <td>
               <h3><img class="logo1" align="center" src="https://upload.wikimedia.org/wikipedia/en/c/c4/Andhra_Pradesh_State_Road_Transport_Corporation_logo.png"></h3> 
            </td>
            <td>
                <h2><p class="word">APSRTC STUDENT BUS PASS APPLICATION</p></h2>
            </td>
        </tr>
    </table>
       
    <?php
include('connection.php');

$uname=$_POST['uname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$adharno=$_POST['adharno'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$Gender=$_POST['Gender'];
$iname=$_POST['iname'];
$icode=$_POST['icode'];
$icname=$_POST['icname'];
$ccode=$_POST['ccode'];
$Ano=$_POST['Ano'];
$iadd=$_POST['iadd'];
$passd=$_POST['passd'];
$from=$_POST['from'];
$to=$_POST['to'];
$tenthfile=$_POST['tenthfile']['name'];
$photofile=$_POST['photofile']['name'];
$adharfile=$_FILES['adharfile']['name'];
$adharfile1=$_POST['adharfile1']['name'];


$file_tmp =$_FILES['adharfile']['tmp_name'];
$file_tmp1=$_FILES['tenthfile']['tmp_name'];
$file_tmp2=$_FILES['photofile']['tmp_name'];
$file_tmp3=$_FILES['adharfile1']['tmp_name'];
$sql3= "insert into intable(uname,password,cpassword,fname,mname,lname,fathername,mothername,
adharno,dob,phone,email,Gender,iname,icode,icname,ccode,Ano,iadd,passd,fromm,too) values ('$uname',
'$password','$cpassword','$fname','$mname','$lname','$fathername','$mothername','$adharno','$dob','$phone','$email',
'$Gender','$iname','$icode','$icname','$ccode','$Ano','$iadd','$passd','$from','$to')";
$address=$_POST['address'];

//$sql3= "insert into intable(uname,password) values ('$from','$to')";

$rd=mysqli_query($conn,$sql3);
$sql4= "insert into address(address) values('$address')";
$rd1=mysqli_query($conn,$sql4);

$sql5="insert into login(username,password) values ('$uname','$password')";
$rd2=mysqli_query($conn,$sql5);

//move_uploaded_file($file_tmp,"images/".$file_name);

move_uploaded_file($file_tmp,"C:\wamp\www\epics\uploads\aadhar/".$uname);
move_uploaded_file($file_tmp1,"C:\wamp\www\epics\uploads\tenth/".$uname);
move_uploaded_file($file_tmp2,"C:\wamp\www\epics\uploads\photo/".$uname);
move_uploaded_file($file_tmp3,"C:\wamp\www\epics\uploads\signature/".$uname);
//$att=$_FILES["fil"]["adharfile"];  

echo "<a href='payment.php'><font color=black size=15>Continue Payment</a>";


?>
 </form>
</body>
</html>