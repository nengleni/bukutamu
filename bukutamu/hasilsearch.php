<html>
    <head>
        <title></title>
    </head>

    <body>
        <?php
            // echo "<pre/>"; print_r($_POST);
            // exit;
            $kolom = $_POST['kolom'];
            $cari = $_POST['cari'];
            $conn = mysqli_connect("localhost","root","","bukutamu");
            $hasil = $conn->query("select * from bukutamu ");
            $jumlah = mysqli_num_rows($hasil);
            echo "<br>";
            echo "Ditemukan : $jumlah";
            echo "<br>";
            while($baris=mysqli_fetch_array($hasil)) {
                echo "Nama : ";
                echo $baris[0];
                echo "<br>";
                echo "Email";
                echo $baris[1];
                echo "<br>";
                echo "komentar :";
                echo $baris[2],"<br>";
            }
        ?>
    </body>
</html>