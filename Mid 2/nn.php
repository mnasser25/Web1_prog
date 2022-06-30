<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobile</title>
</head>

<body bgcolor="#d3d3d3">

<h1> <center> Q3 </center></h1><hr><br><br>
<center>
    <table align="center" border='1' width="50%">
        <form name="entry" method="post" action="">
            <td  align='center' colspan='2'> Data entry page  </td>
            <tr> <td align='center'>ID </td> <td> <input type="number" name="id" value=""> </td></tr>
            <tr> <td align='center'>Mobile </td> <td> <input type="number" placeholder="059xx , 056xx"name="mobile" value=""> </td></tr>
            <tr> <td align='center'>Gender </td> <td> <select name="gender">
                        <option>Female</option>
                        <option>Male</option></select><br> </td></tr>
            <td  align='center' colspan='2'> <input type="submit" name="submit" value="SEND DATA" </td>

        </form>
    </table>

    <?php
    if(@$_POST['submit']) {
        if (substr($_POST['mobile'],0, 3) == '059') {

            echo "<h3 style='color: green'> JAWWAL MOBILE </h3>";

        } elseif (substr($_POST['mobile'], 0, 3) == '056') {
            echo "<h3 style='color: red'> ORREDDO MOBILE </h3>";
        }
        else
            echo"<br><h3 style='color: red'> Invaild Number, Mobile Should be start at 059 or 056 </h3>";
    }
    ?>
</center>
</body>
</html>