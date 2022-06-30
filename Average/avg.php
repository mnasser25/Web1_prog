<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Avarage marks</title>
    <style>
        .res-circle {
            /* (A) PERCENTAGE WIDTH & BORDER RADIUS */
            width: 20%;
            border-radius: 50%;
            /* (B) BACKGROUND COLOR */
            background: red;
            /* (C) NECESSARY TO POSITION TEXT BLOCK */
            line-height: 0;
            position: relative;
        }
        /* (D) MATCH HEIGHT */
        .res-circle::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }
        /* (E) TEXT BLOCK */
        .circle-txt {
            /* (E1) CENTER TEXT IN CIRCLE */
            position: absolute;
            bottom: 50%;
            width: 100%;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body bgcolor="#d3d3d3">

<h1 > <center> Avarage marks </center></h1><hr>
<br>
<center>
    <br><br>

</center>
</body>
</html>
<?php
$sum = 0;
$s = 0;
$avg = 0;
/* enter mark in this array */
$marks = array(50,0,0,0);
$hours= array(3,2,4,3);
for($i=0;$i<=3;$i++){
    $s = $marks[$i]*$hours[$i];
    $sum += $s;
}
$tot_hours = array_sum($hours);
$avg = $sum / $tot_hours;
if ($avg <= 100 && $avg >= 90 ){
    echo '<h3 style="color: red" align="center"> EXCELLENT </h3>';}
if ($avg <= 89 && $avg >= 80 ){
    echo '<h3 style="color: green" align="center" > VERY GOOD </h3>';}
if ($avg <= 79 && $avg >= 60 ){
    echo '<h3 style="color: yellow" align="center"> GOOD </h3>';}
elseif ($avg <60) {
    echo'<center></center><div class="res-circle">
  <div class="circle-txt">FAIL</div>
</div> </center>';
    // echo '<h3 style="color: black" align="center"> fail </h3>';
}
?>