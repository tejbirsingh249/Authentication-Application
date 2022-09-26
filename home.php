<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" tyle="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <a class="logout" href="logout.php"> LOGOUT </a>
        <a class="view" href="details.php"> VIEW DETAILS </a>
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    </div>
</body>

</html>