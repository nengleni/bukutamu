<!DOCTYPE html>
<html>
<head>
	<title>BukuTamu</title>
</head>
<body>
	<h1>Buku Tamu SMK</h1>
	<form action="prosestambahan.php" method="post">
		nama : <input type="text" name="name" size="35" maxlength="50"><br>
		email : <input type="text" name="email" size="35" maxlength="50"><br>
		komentar: <textarea name="komentar" rows="5" cols="30"></textarea><br>
		<input type="submit" value="simpan">
		<input type="reset" value="reset">
</form>
</body>
</html>