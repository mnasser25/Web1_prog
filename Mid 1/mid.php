<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>marks</title>
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

<h1> <center> Q1: MARKS  </center></h1><hr><br><br>
<center>
    <?php
    $data=array('php'=> 95,'Math'=>90);
    $arylen = count($data);
    $arysum = array_sum($data);
    $aryavg = $arysum / $arylen ;

    echo "<table border='1'  > <tr> <td> <b>COURSE</b> </td> <td><b>MARK</b> </td></tr>";
    foreach ($data as $key => $value) {
        echo "<tr> <td> $key </td> <td> $value</td> </tr>";
    }
    echo "</table>";
    echo " <br><br><center><b> Array length =  ".$arylen ."</b></center>";
    echo ' <center> <h3 style ="color  : red "> Avarage =  '. $aryavg .'</center>';
    echo '</h3>';

    ?>
</center>
</body>
</html>