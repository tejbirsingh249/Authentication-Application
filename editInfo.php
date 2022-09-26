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
        $myPass=$row["password"];
        $myName=$row["name"];
    }
}?>

<!DOCTYPE html>
<html>

<head>
    <title> profilepage </title>
    <link rel="stylesheet" type="text/css" href="profilepage.css">
</head>

<body>
    <form action="editProfile.php" method="post">
        <center>
            <div class="profile-box">
                <label class="-label" for="file">
                    <span>Edit Pic</span>
                </label>
                <input id="file" type="file" onchange="loadFile(event)" />
                <img src="image.jpg" id="output" width="200" />
                <input type="text" name="user" placeholder="USername" value="<?php echo $myName; ?>">
                <input type="email" name="Email-ID" placeholder="Email ID" value="<?php echo $myEmail; ?>">
                <input type="text" name="passwordNew" placeholder="Password" value="<?php echo $myPass; ?>">
                <button onclick="window.location.reload()" style="float: left; margin: 10px 0 0 18.2%;">CANCEL</button>
                <button style="float: right; margin: 10px 18.2% 0 0;">DONE</button>
            </div>
        </center>
        <script>
        var loadFile = function(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>
    </form>
</body>

</html>