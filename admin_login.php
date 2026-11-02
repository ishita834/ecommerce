<?php
session_start();
require_once "db.php";

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"] ?? "";
$password = $data["password"] ?? "";

if ($username === "admin" && $password === "admin123") {
    session_regenerate_id(true);
    $_SESSION["admin_logged_in"] = true;

    echo json_encode(["success" => true]);
} else {
    http_response_code(401);
    echo json_encode(["success" => false]);
}
?>