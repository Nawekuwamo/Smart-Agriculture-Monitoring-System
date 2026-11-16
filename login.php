<?php
// Starter endpoint. Add secure session settings, CSRF protection and rate limiting before deployment.
session_start();
require_once __DIR__ . "/../config/database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed");
}
$email = filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL);
$password = $_POST["password"] ?? "";
if (!$email || $password === "") {
    http_response_code(400);
    exit("Invalid email or password.");
}

$stmt = $pdo->prepare("SELECT id, full_name, password_hash FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user["password_hash"])) {
    http_response_code(401);
    exit("Invalid email or password.");
}
session_regenerate_id(true);
$_SESSION["user_id"] = $user["id"];
$_SESSION["user_name"] = $user["full_name"];
header("Location: ../../index.html");
exit;
