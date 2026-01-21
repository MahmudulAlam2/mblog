<?php
require_once 'config/database.php';
session_start();

if (!isset($_GET['code'])) {
    header('Location: signin.php'); exit;
}

$code = $_GET['code'];

$stmt = $conn->prepare(
"UPDATE users SET is_verified=1 WHERE verification_code=? AND is_verified=0"
);
$stmt->bind_param("s",$code);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    $_SESSION['signup_success'] = 'Email verified successfully!';
} else {
    $_SESSION['signup_error'] = 'Invalid or expired link';
}

$stmt->close();
header('Location: signin.php');
exit;
