<?php
require_once 'config/database.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if (!isset($_POST['submit'])) {
    header('Location: signup.php'); 
    exit;
}

$errors = [];
$old = [];

// Get POST data
$firstname = trim($_POST['firstname']);
$lastname  = trim($_POST['lastname']);
$username  = trim($_POST['username']);
$emailRaw  = trim($_POST['email']);
$email     = filter_var($emailRaw, FILTER_VALIDATE_EMAIL);
$password  = $_POST['createpassword'];
$confirm   = $_POST['confirmpassword'];
$avatar    = $_FILES['avatar'];

$old = [
    'firstname'=>$firstname,
    'lastname'=>$lastname,
    'username'=>$username,
    'email'=>$emailRaw
];

/* --------- VALIDATION --------- */
if ($firstname === '') $errors['firstname'] = 'First name required';
if ($lastname === '')  $errors['lastname']  = 'Last name required';
if ($username === '')  $errors['username']  = 'Username required';
if (!$email)           $errors['email']     = 'Invalid email';

if (strlen($password) < 8)
    $errors['password'] = 'Minimum 8 characters';

if (!preg_match('/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)/', $password))
    $errors['password'] = 'Must contain uppercase, lowercase, number';

if ($password !== $confirm)
    $errors['confirm'] = 'Passwords do not match';

/* --------- AVATAR --------- */
$avatar_name = null;
if ($avatar['name']) {
    $ext = strtolower(pathinfo($avatar['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, ['jpg','jpeg','png'])) {
        $errors['avatar'] = 'Only JPG, PNG allowed';
    } elseif ($avatar['size'] > 10*1024*1024) {
        $errors['avatar'] = 'Max size 10MB';
    }
}

/* --------- ERROR RETURN --------- */
if ($errors) {
    $_SESSION['signup_errors'] = $errors;
    $_SESSION['signup_old'] = $old;
    header('Location: signup.php'); 
    exit;
}
$email = strtolower(trim($email));
/* --------- DUPLICATE CHECK --------- */
$stmt = $conn->prepare("SELECT id FROM users WHERE email=? OR username=?");
$stmt->bind_param("ss",$email,$username);
$stmt->execute();
if ($stmt->get_result()->num_rows > 0) {
    $_SESSION['signup_errors']['email'] = 'Email or username exists';
    $_SESSION['signup_old'] = $old;
    header('Location: signup.php'); 
    exit;
}
$stmt->close();

/* --------- UPLOAD AVATAR --------- */
if ($avatar['name']) {
    $avatar_name = time().'_'.preg_replace("/[^a-zA-Z0-9.-]/","",$avatar['name']);
    move_uploaded_file($avatar['tmp_name'], 'images/'.$avatar_name);
}

/* --------- INSERT USER --------- */
$hash = password_hash($password, PASSWORD_DEFAULT);
$code = bin2hex(random_bytes(16));

$stmt = $conn->prepare(
"INSERT INTO users 
(firstname,lastname,username,email,password,avatar,is_admin,verification_code,is_verified)
VALUES (?,?,?,?,?,?,0,?,0)"
);
$stmt->bind_param(
"sssssss",
$firstname,$lastname,$username,$email,$hash,$avatar_name,$code
);
$stmt->execute();
$stmt->close();

/* --------- SEND VERIFICATION EMAIL --------- */
$verification_link = ROOT_URL."verify.php?code=$code";

// PHPMailer SMTP (optional)
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'yourgmail@gmail.com'; // Replace
    $mail->Password   = 'yourapppassword';     // Replace
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('yourgmail@gmail.com','M_Blogs');
    $mail->addAddress($email,$firstname.' '.$lastname);

    $mail->isHTML(true);
    $mail->Subject = 'Verify your email for M_Blogs';
    $mail->Body = "Hi $firstname,<br><br>Click link to verify: <a href='$verification_link'>$verification_link</a><br><br>Thanks!";

    $mail->send();
    $_SESSION['signup_success'] = 'Signup successful! Please check your email to verify.';
} catch (Exception $e) {
    $_SESSION['signup_success'] = 'Signup successful! But email could not be sent.';
}

/* --------- REDIRECT TO SIGNIN --------- */
header('Location: signin.php');
exit;
