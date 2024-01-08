<?php
include 'db_config.php';

$firstname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$reg = filter_input(INPUT_POST, 'reg', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'repass', FILTER_SANITIZE_STRING);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($password !== $pass) {
        echo "<script>alert('Error: Passwords do not match.'); window.location.href='index.html';</script>";
        exit();
    }

    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    if ($checkEmail->get_result()->num_rows > 0) {
        echo "<script>alert('Error: Email address already exists.'); window.location.href='index.html';</script>";
        exit();
    }

    $checkReg = $conn->prepare("SELECT * FROM users WHERE reg = ?");
    $checkReg->bind_param("s", $reg);
    $checkReg->execute();
    if ($checkReg->get_result()->num_rows > 0) {
        echo "<script>alert('Error: Registration number already exists.'); window.location.href='index.html';</script>";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fname, lname, reg, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $reg, $email, $hashedPassword);
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful'); window.location.href='log-in.html';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='index.html';</script>";
    }

    $stmt->close();
    $checkEmail->close();
    $checkReg->close();
    $conn->close();
}
?>
