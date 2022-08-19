<?php
session_start();
//script koneksi
$koneksi = new mysqli("localhost", "root", "", "bus");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register - TICKET BUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/bus-solid-2.png" rel="icon">
    <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="admin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.php" class="logo d-flex align-items-center w-auto">
                                    <img src="img/bus-solid-2.png" alt="">
                                    <span class="d-none d-lg-block">TICKET BUS</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" method="post">

                                        <div class="col-12">
                                            <label class="form-label">Nama Lengkap</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nama" class="form-control">
                                                <div class="invalid-feedback">Tolong Masukkan Nama Anda!</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control">
                                            <div class="invalid-feedback">Tolong Masukkan Email Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                            <div class="invalid-feedback">Tolong Masukkan Password Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">No.Telp</label>
                                            <input type="number" name="telp" class="form-control">
                                            <div class="invalid-feedback">Tolong Masukkan No.Telp Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <select name="jk" class="form-control">
                                                <option> -- Pilih Jenis Kelamin -- </option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="invalid-feedback">Tolong Pilih Jenis Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Alamat</label>
                                            <textarea name="alamat" class="form-control"></textarea>
                                            <div class="invalid-feedback">Tolong Masukkan Alamat Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-warning w-100" name="save">Buat Akun</button>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['save'])) {
                                        $koneksi->query("INSERT INTO pelanggan (nama_pelanggan,email_pelanggan,password_pelanggan,telepon_pelanggan,jenis_kelamin,alamat) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[password]','$_POST[telp]', '$_POST[jk]', '$_POST[alamat]') ");

                                        echo "<div class='alert alert-info'>Akun Telah Dibuat. Silahkan Login</div>";
                                        echo "<meta http-equiv='refresh' content='1;url=pages-login.php?halaman=login'>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->



    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>

    </div>
    </div>
    </div>

    </section>

    </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin/assets/vendor/quill/quill.min.js"></script>
    <script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="admin/assets/js/main.js"></script>

</body>

</html>