<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body bgcolor="#d3d3d3">
<h1> <center> Bisection method </center></h1><hr>
<br>
<center>
    <div id="page-wrap">
        <form action="" method="post" id="quiz-form">
            <input type="number" name="x3par" id="first_num" value="<?php echo $_POST['x3par'];
            ?>" > <b> X <sup>3</sup> +</b>
            <input type="number" name="x2par" id="first_num" value="<?php echo
            $_POST['x2par']; ?>" > <b> X <sup>2</sup> +</b>
            <input type="number" name="xpar" id="second_num" value="<?php echo $_POST['xpar'];
            ?>" > <b> X + </b>
            <input type="number" name="const" value="<?php echo $_POST['const']; ?>">
            <br><br>
            <b>Enter interval:(</b><input type="number" name="val1" value="<?php echo
            $_POST['val1']; ?>"> <b> ,</b><input type="number" name="val2" value="<?php echo $_POST['val2'];
            ?>"><b>).</b>
            <br><br>
            <input type="submit" name="submit" value="Find root" >
        </form>
    </div>
</center>
</body>
</html>
<?php
function func($x)
{
    return
        (@$_POST['x3par']*$x*$x*$x)+(@$_POST['x2par']*$x*$x)+(@$_POST['xpar']*$x)+(@$_POST['const']);
}
function bisection($a, $b)
{
    if (func($a) *
        func($b) >= 0)
    {
        echo "You have not assumed " .
            "right a and b","\n";
        return;
    }
    $c = $a;
    $count =4;
    while ($count != 0)
    {
        $c = ($a + $b) / 2;
        if (func($c) == 0.0)
            break;
        else if (func($c) * func($a) < 0)
            $b = $c;
        else
            $a = $c;
        $count --;
    }
    return $c;
}
if(@$_POST['submit']) {
    $a = @$_post['val1'];
    $b = @$_POST['val2'];
    $root = bisection($a, $b);
    $fun_root = func($root);
    echo "<br><br><center>The root value = " . $root . "</center><br>";
    echo "<center>F ( ".$root." ) = " . $fun_root . "</center>";
}
?>
