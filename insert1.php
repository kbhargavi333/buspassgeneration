<?php
include('connection.php');
$query="select *from intable LIMIT 1";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.php">
        <style><?php include 'C:/wamp/www/epics/style.css'; ?></style>
        <style>
            *{
                background-color:cornsilk;
               
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
            }
            .container{
            width: 86%;
            margin: 0 auto;
        }
        #header .container{
            justify-content: space-between;
            align-items: center;

        }
       
        .main-nav ul li{
            float: left;
            padding: 1px 16px;
  text-decoration: none;
  font-size: 17px;
        }
        .main-nav ul li a{
            text-decoration: none;
            color: #fff;
        }
        .main-nav ul li a:hover{
            font-size: 25px;
  
    border-radius: 36px;
    color:white; 

        }
            img{
                text-align: center;
                margin-left: 22%;
                margin-top: 10%;
            }
            h1{
                margin-left:30%;

            }
            .button{
                font-size:200%;
                margin-left:90%;
                margin-right:0%;
                background-color: #008CBA;
                border-radius:26px;
                cursor:pointer;
                margin-top:-40px;
            
  color: black;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
            }
         .button:hover{
            font-size: 28px;
            color: #ffff;
            background-color:#008CBA;
         }
         #logo{
    height: 80px;
    width: 80px;
    margin-right: 15px;
    margin-left: -520px;
margin-top: 3px;
}
.img{
    height: 140px;
    width: 100px;
    margin-left: 520px;
    margin-top:-150px;

}
.logo1{
    height:100px
}

         
 
         
        </style>
    </head>
    <body>
        <h1><i>Original Buspass Will be deliverd to your address</i></h1><br>
        <a href='main.html'> <button class="button"  dir="rtl">Logout</button></a>
        
       <div  class='php1'>
       <img class="logo1" id="logo" src="https://upload.wikimedia.org/wikipedia/en/c/c4/Andhra_Pradesh_State_Road_Transport_Corporation_logo.png"><br><br>
       <h2> A.P.S.R.T.C Bus Pass</h2>
       <img class="img" src="userimage.jpg"> <br>   
        <?php
        
  if ($result->num_rows>0) 
{
  
  while($row = $result->fetch_assoc())
  {
     echo   "Name  : ".
            $row["uname"]."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"." Phone No : " . 
            $row['phone']."<br>"."Date of Birth : ". 
            $row['dob']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Adhar:".
            $row['adharno']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."<br>"."Gender:".
            $row['Gender']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Institutioncode:".
            $row['icode']."&nbsp"."&nbsp"."&nbsp"."<br>"."Institution:". 
            $row['iname']."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Email:".
            $row['email']."<br>";
            echo "Issued date: " . date('d/m/Y', strtotime('+0 months')) . "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
echo "Valid Upto:" . date('d/m/Y', strtotime('+3 months')). "<br>";
            
  }
} 




$conn->close();

?>

</div>
    </body>


</html>