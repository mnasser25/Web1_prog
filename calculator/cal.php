<!DOCTYPE html>

<head>
    <title>Simple Calculator Program</title>
</head>

<?php

$first_num = @$_POST['first_num'];
$second_num = @$_POST['second_num'];
$operator = @$_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;

    }
}

?>

<body bgcolor="#d3d3d3">
<br>
<center>
    <div id="page-wrap">
        <h1> The  Simple Calculator </h1><hr><br>
        <form action="" method="post" id="cal">
            <p>
                <b>First Number: </b>  <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />
            </p>
            <p>
                <b>Second Number: </b>   <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
            </p>
            <p>
                <b>Result: </b> <input readonly="readonly" name="result" value="<?php echo $result; ?>">
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Multiply" />
        </form>
    </div>
</center>
</body>
</html>