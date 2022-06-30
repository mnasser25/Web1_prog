
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>

        input[type=text], input[type=password],input[type=email] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0; }
        input[type=submit]{width:10%; }
        h3{color:red}
    </style>
</head>



<body bgcolor="#d3d3d3">
<h1> <center> Login page </center></h1><hr>
<br>
<center>
    <br><br>
    <form name="entry" method="post" action="">

        <label for="uname"><b>Login name : </b></label>
        <input type="text" placeholder="Enter loginname" name="uname" ><br>

        <label for="psw"><b>Password : </b></label>
        <input type="password" placeholder="Enter password" name="psw" ><br>

        <label for="email"><b>Email : </b></label>
        <input type="email" placeholder="Enter email" name="email" ><br>

        <input type="submit" name="submit" value="CHECK DATA">

        </label>
    </form>

</html>
<?php

if(@$_POST['submit']){

    if( $_POST['uname']== "abc" &&  $_POST['psw'] == "123"){
        header("location:login.html");
        exit();
    }
    elseif($_POST['uname'] != "abc" ||  $_POST['psw'] != "123"){
        echo"<br><h3>WRONG INPUT</h3>";
    }
}

?>
