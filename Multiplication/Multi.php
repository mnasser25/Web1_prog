<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication</title>
    <style>
        table {border: 1px solid black}
        td {text-align: center}
    </style>
</head>
<body bgcolor="#d3d3d3">
<h1> <center> Multiplication </center></h1><hr>
<br>
<center>
    <br><br>
    <form name="entry" method="post" action="">

        <b> Enter number :<sub>(Number between 2 and 10)</sub> </b> <input type="number" name="num"
                                                                           value="num">
    </form>
    <br><br>
    <table align="center" border='1' width="50%">
        <?php
        $num=0;
        if (is_numeric(@$_POST['num'])) {
            $num=$_POST['num'];
            echo "<td colspan='2'> Multiplication table for $num </td> ";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr align='center'>";
                $multiplication_table = ($num * $i);
                echo "<td align='center'>$num x $i = $multiplication_table </td>";
                echo "<tr/>";
            }
        }
        ?>
    </table>
</center>
</body>
</html>