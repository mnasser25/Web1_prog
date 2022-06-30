<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data entry</title>
    <style>
        input[type=text],select {
            width: 20%;
            padding: 8px 10px;
            margin: 8px 0; }
        input[type=submit]{width:10%; }
        h2{color: red}
        h3{color: green}
    </style>
</head>
<body bgcolor="#d3d3d3">

<h1> <center> Data entry page </center></h1><hr>
<br>
<center>
    <br><br>
    <form name="entry" method="post" action="">
        <div class="container">
            <label for="id"><b> ID : </b></label>
            <input type="text" placeholder="Enter id" name="id" required><br>

            <label for="mobile"><b>Mobile : </b></label>
            <input type="text" placeholder="Enter mobile" name="mobile" required><br>

            <label for="gender"><b>Gender : </b></label>
            <select name="gender">
                <option>Female</option>
                <option>Male</option></select><br>

            <input type="submit" name="send" value="SEND DATA">

            </label>
        </div>
    </form>
    <?php
    if(@$_POST['send']) {
        if (substr($_POST['mobile'], 2, 1) == '9') {
            echo "<h3>JAWWAL MOBILE</h3>";
        } elseif (substr($_POST['mobile'], 2, 1) == '6') {
            echo "<h3>ORREDDO MOBILE</h3>";
        }
        else
            echo"<h2>OUT OF TYPE</h2>";
    }
    ?>

</center>
</body>
</html>