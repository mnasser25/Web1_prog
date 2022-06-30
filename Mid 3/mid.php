<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume</title>
    <style>
        table { border: 1px solid black;
            border-collapse: collapse
        text-align: center;
            width: 50%;
            height: 150px;
        }
        td,th {text-align: center}

    </style>
<head>

<body bgcolor="#d3d3d3">

<h1> <center> Q3: volume of sphere  </center></h1><hr><br><br>
<center>
    <?php
    if(@$_POST['find']) {
        $r = $_POST['radius'];
        $v = (4/3)*pow($r,3)*pi();
        if ($r >= 1 && $r <=10 ){
            $volume= round($v,2);
        }
        else {
            echo '<br><h3 style ="color  : red "> ENTER VALID NUMBER </h3>';
        }
    }
    ?>

    <form name="entry" method="post" action="">
        <div class="container">
            <label for="id"><b>  Radius: </b></label>
            <input type="number" placeholder="r between 1&10" name="radius" required>

            <input type="submit" name="find" value="FIND VOLUME"><br><br>

            <label for="id"><b>  Volume: </b></label>
            <input type="text" name ="Volume" readonly value = "<?php echo @$volume; ?>">

            </label>
        </div>
    </form>
</center>
</body>
</html>