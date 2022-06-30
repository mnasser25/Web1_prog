<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency converter</title>
    <style>
        table {border: hidden}
    </style>
</head>
<?php
$output = '';
if (is_numeric(@$_POST['amount'])) {
    switch (@$_POST['cur']) {
        case "USD":
            $output =$_POST['amount'] *0.31;
            break;
        case "JOD":
            $output =$_POST['amount'] *0.22;
            break;
        case "EUR":
            $output =$_POST['amount'] *0.28;
            break;
    }
}

?>
<body bgcolor="#d3d3d3">


<h1> <center> Currency converter </center></h1><hr>
<br>
<center>
    <br><br>
    <table>
        <form name="entry" method="post" action="">
            <tr><td> Amount: </td><td><input type="number" name="amount" value="" placeholder="amount"></td></tr>
            <tr><td>From ILS to :</td>
                <td><select name="cur">
                        <option>USD</option>
                        <option>JOD</option>
                        <option>EUR</option></select></td></tr>
            <tr><td>Amount converted:</td><td><input readonly="readonly" name="result" value="<?php echo $output; ?>"></td></tr>
            <tr><td><br><input type="submit" name="convert" value="convert"></td></tr>

        </form>

    </table>
</center>
</body>
</html>

<?php
if (@$_POST['cur']=="USD")
    echo"<center><br>1 shekel = 0.31 dollar</center>";

else if(@$_POST['cur']=="JOD")

    echo" <center><br>1 shekel = 0.22 dinar</center>";

else if(@$_POST['cur']=="EUR")
    echo" <center><br>1 shekel = 0.28 euro</center>";

?>

