<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marks page</title>
    <style>
        table {border: 1px solid black}
        td {text-align: center}
        h3{color: darkslateblue}
    </style>
</head>
<body bgcolor="#d3d3d3">
<h1> <center> Marks page </center></h1><hr>
<br>
<center>
    <br><br>
    <form name="entry" method="post" action="">
        <b> Enter number :<sub>(Number between 1 and 10)</sub> </b> <input type="number"
                                                                           name="num" value="num">
        <br><br> <input type="submit" name="submit1" value="NEXT">
        <input type="submit" name="submit" value="ADD">
    </form>
    <br><br>
    <table align="center" border='1' width="50%">
        <?php
        if (@$_POST['submit1']) {
            $num = $_POST['num'];
            echo "<br><td colspan='2'> MARKS </td> ";
            for ($s = 1; $s <= 1; $s++) {
                for ($i = 1; $i <= $num; $i++) {
                    echo "<tr align='center'>";
                    echo "<td align='center'>No . $i </td>";
                    echo ' <td> <input type="number" name="num" value="num" ></td>';
                    echo "<tr/>";
                }
            }
        }
        ?>
    </table>
    <?php
    if(@$_POST['submit']){
        $sum =0;
        for ($i = 1; $i <= $num; $i++){
            $sum += $_POST['num'];
        }
    }
    ?>
    <center> <h3>Total Mark = <input type=text" name="sum" value="<?php echo $sum; ?>" ></center>
</center>
</body>
</html>