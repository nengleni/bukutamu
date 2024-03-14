<html>
    <head>
       
        <title>Tampilan</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="bgform" align="center">
                        <h3><b>BUKU TAMU</b></h3>
                        <div style="width: 500px;">
                            <hr>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = mysqli_connect("localhost","root","","bukutamu");
                                        $hasil = $conn->query("select * from bukutamu");
                                        if(mysqli_num_rows($hasil) > 0) {
                                            $no = 0;
                                            while($row = mysqli_fetch_array($hasil)) {
                                                $no++;
                                                echo '
                                                <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['komentar'].'</td>
                                                <tr>';
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <a href="home.php" class="btn btn-info">Kembali</a>&nbsp;
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </body>
</html>