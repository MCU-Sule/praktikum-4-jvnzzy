<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <table align="center" cellspacing="0" border="1">
        <tr><td colspan="3" align="middle" bgcolor="BADC58">Kalkulator</td></tr>
        <tr><td bgcolor="69B04C">Angka Pertama</td><td><input type="text" value="<?php echo"$_GET[a1]"; ?>"</td></tr>
        <tr><td bgcolor="69B04C">Angka Kedua</td><td><input type="text" value="<?php echo"$_GET[a2]"; ?>"</td></tr>
        <tr><td bgcolor="69B04C">Operator</td><td><input type="text" value="<?php echo"$_GET[op]"; ?>"</td></tr>
        <tr><td colspan="3" align="middle" bgcolor="BADC58">
            Hasil = <?php 
        $Angkapertama = $_GET["a1"];
        $Angkakedua = $_GET["a2"];
        $Operator = $_GET["op"];
        if ($Operator =="+") {
            echo $Angkapertama+$Angkakedua;
        }
        else if ($Operator =="-") {
            echo $Angkapertama-$Angkakedua;
        }
        elseif ($Operator =="*") {
            echo $Angkapertama*$Angkakedua;
        }
        else if($Operator =="/") {
            echo $Angkapertama/$Angkakedua;
        }
            ?>
        </td></tr>
    </table>

   
</body>
</html>