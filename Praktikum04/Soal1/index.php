<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=Fabio 2172014>
    <title>Form</title>
</head>
<body>
<form action="input.php" name="formInput" method="POST">
    <table align="center">
        <caption>Form Input</caption>
        <tr><td>Nama</td><td>:</td><td><input type="text" name="nama" id="nama"></td></tr>
        <tr><td>Email</td><td>:</td><td><input type="text" name="email" id="email"></td></tr>
        <tr><td>Phone Number</td><td>:</td><td><input type="text" name="nohp" id="nohp"></td></tr>
        <tr><td>Hobby</td><td>:</td><td><input type="text" name="hobi" id="hobi"></td></tr>
        <tr><td>Description</td><td>:</td><td><textarea name="desc" id="desc" cols="30" rows="10" ></textarea></td></tr>
        <tr><td colspan="3" align="middle"><input type="submit" value="submit" name="btnKirim"> <input type="reset" value="reset">
    </table>
    </form>
</body>
</html>