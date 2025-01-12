<?php
// Set the content type for the response to JSON
header('Content-Type: application/json');

// Get the raw POST data from the client
$raw_data = file_get_contents("php://input");
$data = json_decode($raw_data, true); // Decode the JSON data into an associative array

// Verifica si los datos no están vacíos
if ($data === null) {
    // Registra un error si los datos son inválidos o no se han enviado correctamente
    echo json_encode([
        "status" => "error",
        "message" => "No valid JSON data received"
    ]);
    exit;
}

// Set the response
$response = [
    "status" => "success",
    "message" => "Webhook received successfully",
    "data" => $data // Include the data received
];

// Log the received data to a file
$log_data = '[' . date('Y-m-d H:i:s') . '] ' . json_encode($data) . "\n";
file_put_contents('logs/webhook_log.txt', $log_data, FILE_APPEND);

// Send the response back to the client
echo json_encode($response);
?>
