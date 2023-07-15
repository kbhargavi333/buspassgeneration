<?php

session_start();
$userid = $_SESSION["userid"];
$type = $_SESSION["type"];


if($type !="admin")
{
header("location:login2.html");

}
$user = $_SESSION["uname"];

if(!session_is_registered('userid'))
{
header("location:login2.html");
}
$uu=$user;


?>