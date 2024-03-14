<html>

<head>
    <title>kunjungan</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "bukutamu");
    $hasil = $conn->query("select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo "Daftar Pengunjung <br>";
    echo "Jumlah Pengunjung : $jumlah";
    $a = 1;
    while ($baris = mysqli_fetch_array($hasil)) {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email : ";
        echo $baris[1];
        echo "<br>";
        echo "Komentar : ";
        echo $baris[2];
        $a++;
    }
    ?>
</body>

</html>