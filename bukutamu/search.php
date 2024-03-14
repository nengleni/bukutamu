<html>
    <head>
   
        <title>Buku Tamu</title>
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
                            <form role="form" method="post" onsubmit="return validasi(this)">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kolom</label>
                                    <div class="col-sm-9">
                                        <select name="kolom" class="form-control">
                                            <option value="nama">Nama</option>
                                            <option value="email">Email</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <br> -->
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kata Kunci</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="cari" class="form-control">
                                    </div>
                                </div>
                                <!-- <br> -->
                                <div class="form-group row">
                                    <input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp;
                                    <input type="reset" class="btn btn-danger" value="Hapus">&nbsp;
                                    <a href="home.php" class="btn btn-info">Kembali</a>&nbsp;
                                </div>
                            </form>
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
                                        // echo "<pre/>"; print_r($_POST);
                                        // exit;
                                        $submit=@$_POST['submit'];
                                        if(isset($submit)) {
                                        $kolom = $_POST ["kolom"];
                                        $cari = $_POST ["cari"];
                                        $conn = mysqli_connect("localhost","root","","bukutamu");
                                        $hasil = $conn->query("SELECT * FROM bukutamu where $kolom like '%$cari%'");
                                        if ($cari == "") {
                                            echo "";
                                        } else {
                                            $jumlah=mysqli_num_rows($hasil);
                                            echo "Ditemukan : $jumlah";
                                        }
                                        if (mysqli_num_rows($hasil) > 0) {
                                            $no = 0;
                                            while ($row = mysqli_fetch_array($hasil)) {
                                                $no++;
                                                echo '
                                                    <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['komentar'].'</td>
                                                    </tr>';
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>



        <script type="text/javascript">
            function validasi (form) {
                var cekcari = form.cari.value;
                if (cekcari == 0) {
                    alert("Masukkan kata kunci!");
                    form.cari.focus();
                    return (false);
                }
                return (true);
            }
        </script>
    </body>
</html>