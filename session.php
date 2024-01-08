<?php
session_start();

if (!isset($_SESSION['reg'])) {
    echo "<script>alert('Log in First'); window.location.href='log-in.html';</script>";
    exit();
}
?>