<?php
require_once 'config/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . ROOT_URL . 'signin.php');
    exit;
}

$username_email = trim($_POST['username_email'] ?? '');
$password = $_POST['password'] ?? '';

if ($username_email === '' || $password === '') {
    $_SESSION['signin_error'] = 'Both fields are required';
    header('Location: ' . ROOT_URL . 'signin.php');
    exit;
}

$stmt = $conn->prepare(
    "SELECT id, firstname, lastname, username, email, password, is_admin 
     FROM users 
     WHERE username = ? OR email = ?
     LIMIT 1"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ss", $username_email, $username_email);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();
$stmt->close();

if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['signin_error'] = 'Invalid login credentials';
    header('Location: ' . ROOT_URL . 'signin.php');
    exit;
}

// ✅ Prevent session fixation
session_regenerate_id(true);

// Set session
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['firstname'] . ' ' . $user['lastname'];
$_SESSION['user_is_admin'] = (int)$user['is_admin'] === 1;

$_SESSION['signin_success'] = 'Welcome back, ' . $user['firstname'] . '!';

// Redirect
if ($_SESSION['user_is_admin']) {
    header('Location: ' . ROOT_URL . 'admin/');
    exit;

}