<?php
session_start(); 

include 'db_config.php';

$reg = filter_input(INPUT_POST, 'reg', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$stmt = $conn->prepare("SELECT * FROM users WHERE reg = ?");
$stmt->bind_param("s", $reg);
$stmt->execute();
$stmt_result = $stmt->get_result();
if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if (password_verify($password, $data['password'])) { 

        $_SESSION['reg'] = $reg;
        header("Location: event.php");
        exit;
    } else {
        echo "<script>alert('Invalid Registration Number or password'); window.location.href='log-in.html';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid Registration Number or Password'); window.location.href='log-in.html';</script>";
    exit();
}
?>
