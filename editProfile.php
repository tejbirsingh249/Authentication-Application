<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$Uname = $_POST['userName'];
$pass = $_POST['password'];
$email = $_POST['email'];

$name = $_POST['user'];


$s = "select * from usertable where name='$name' " ;
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1){
    echo "Username already taken";
}else{
    $myName = $_SESSION['username'];
    $reg= "update usertable set name='$name' where name='$myName'";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
?>