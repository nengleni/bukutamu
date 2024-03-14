<html>
    <head>
        
        <title>Buku Tamu</title>
    </head>

    <body>
        <div class="continer">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="bgform" align="center">
                        <h3><b>BUKU TAMU</b></h3>
                        <div style="width: 500px;">
                            <hr>
                            <div style="width: 500px;" align="left">
                                <form role="form" method="post" onsubmit="return validasi (this)">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Komentar</label>
                                        <div class="col-sm-9">
                                            <textarea name="komentar" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <!-- <br> -->
                                    <div class="form-group row">
                                        <input type="submit" class="btn btn-success" name="submit" value="Proses">&nbsp;
                                        <input type="reset" class="btn btn-danger" value="Hapus">&nbsp;
                                        <a href="home.php" class="btn btn-info">Kembali</a>&nbsp;
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <?php
            $submit=@$_POST['submit'];
            if(isset($submit)) {
                $nama=$_POST['nama'];
                $email=$_POST['email'];
                $komentar=$_POST['komentar'];
                $conn=mysqli_connect("localhost","root","","bukutamu") or die ("koneksi gagal");
                $sql="INSERT INTO`bukutamu`(nama,email,komentar)VALUES('$nama','$email','$komentar')";
                $result=mysqli_query($conn,$sql);
                if($result == true) {
                }
            }
        ?>



        <script type="text/javascript">
            function validasi (form) {
                var ceknama = form.nama.value;
                var cekemail = form.email.value;
                var cekKomen = form.komentar.value;
                if (ceknama == 0) {
                    alert("periksa kembali nama anda!");
                    form.nama.focus();
                    return (false);
                }
                if (cekemail == 0 || cekemail.indexOf("@",1)==-1) {
                    alert("periksa kembalin email anda!");
                    form.email.focus();
                    return (false);
                }
                if (cekKomen == 0) {
                    alert("periksa kembali komentar anda!");
                    form.komentar.focus();
                    return (false);
                }
                return (true);
            }
        </script>
    </body>
</html>