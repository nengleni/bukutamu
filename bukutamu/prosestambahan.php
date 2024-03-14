<html>

<head>
    <title>proses</title>
</head>

<body>
    <h1>Simpan Buku Tamu </h1>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $conn = mysqli_connect('localhost','root','mysql','bukutamu') or die("koneksi gagal");
    echo "Nama : $nama <br>";
    echo "Email : $email <br>";
    echo "Komentar : $komentar <br>";
    $sqlstr = "insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
    $result = mysqli_query($conn, $sqlstr);
    echo "Simpan bukutamu berhasil dilakukan";
    ?>
</body>

</html>