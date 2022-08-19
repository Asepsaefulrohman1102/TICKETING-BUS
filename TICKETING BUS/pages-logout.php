<?php
session_start();
//Hancurkan Session pelanggan
session_destroy();

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";

?>
