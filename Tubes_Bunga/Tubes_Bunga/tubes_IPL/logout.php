<?php
session_start();
session_destroy();
header("Location: loginuser.php"); // Ganti dengan halaman login Anda
exit;
