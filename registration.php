<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email1 = $_POST['email'];

$s = "select * from usertable where name='$name' " ;
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken";
}else{
    $reg= "insert into usertable(name, password, email) values('$name', '$pass', '$email1')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}
?>