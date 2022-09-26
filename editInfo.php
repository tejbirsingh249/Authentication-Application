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
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> profilepage </title>
        <link rel="stylesheet" type="text/css" href="editInfoCSS.css">
        
    </head>
    <body class="body-style">
      <form action="editProfile.php" method="post">  
        <center>
           
    <div class="profile-box">
                    
        <label class="-label" for="file">
            
            <span>Edit Pic</span>
        </label>
        <input id="file" type="file" onchange="loadFile(event)"/>
        <img src="" id="output" width="200" />
                    
                    <input type="text" name="user" placeholder="User Name" value="">
                    <input type="email" name="Email-ID" placeholder="Email ID" value="">
                    <input type="text" name="Phone-Number" placeholder="Phone Number" value="">
                    <input type="text" name="Date-Of-Birth" placeholder="Date Of Birth" value="">
                    <input type="text" name="Gender" placeholder="Gender" value="">
                    <button onclick="window.location.reload()" style="float: left; margin: 10px 0 0 18.2%;">CANCEL</button>
                    <button style="float: right; margin: 10px 18.2% 0 0;">DONE</button>


                </div>
            </center>
            <script >  
            var loadFile = function (event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    
            </script>
    </form>   
    </body>
</html>



