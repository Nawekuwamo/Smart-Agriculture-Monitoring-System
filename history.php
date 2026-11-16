<?php
header("Content-Type: application/json; charset=utf-8");
require_once __DIR__ . "/../config/database.php";

try {
    $stmt = $pdo->query(
        "SELECT moisture_percent, soil_status, pump_status, recorded_at
         FROM sensor_readings ORDER BY recorded_at DESC LIMIT 100"
    );
    echo json_encode($stmt->fetchAll());
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(["error" => "Unable to retrieve sensor history"]);
}
