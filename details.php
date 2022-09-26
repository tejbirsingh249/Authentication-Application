<?php

session_start();

$con = new mysqli('localhost','root','','userregistration');

$newName = $_SESSION['username'];

$s = "select * from usertable where name='$newName'" ;
$result =  $con->query($s);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc()){
        $myEmail=$row["email"];
    }
}?>

<html>

<head>
    <title> Details Page </title>
    <link rel="stylesheet" tyle="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="newLinkButtons">
        <a class="signout_details" href="logout.php"> LOGOUT </a>
        <a class="edit_details" href="editInfo.php"> EDIT </a>
    </div>
    <div class="details-box">
        <h4 style="text-align:center"> View User Profile </h4>
        <div class="newuser">
            <label class="style_label"> Username: </label>
            <span> <?php echo $_SESSION['username']; ?></span>
        </div>
        <div class="newmail">
            <label class="style_label"> Email: </label> <span> <?php echo $myEmail; ?> </span>
        </div>
    </div>

</body>

</html>