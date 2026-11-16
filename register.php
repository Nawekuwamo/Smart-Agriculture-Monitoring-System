<?php
// Starter endpoint. Add CSRF protection, validation, rate limiting and secure sessions before deployment.
require_once __DIR__ . "/../config/database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed");
}
$name = trim($_POST["name"] ?? "");
$email = filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL);
$password = $_POST["password"] ?? "";

if ($name === "" || !$email || strlen($password) < 8) {
    http_response_code(400);
    exit("Please provide valid details. Password must be at least 8 characters.");
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO users (full_name, email, password_hash) VALUES (?, ?, ?)");
try {
    $stmt->execute([$name, $email, $hash]);
    header("Location: ../../login.html");
    exit;
} catch (PDOException $e) {
    http_response_code(400);
    exit("Could not create account. The email may already be registered.");
}
