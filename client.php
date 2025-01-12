<?php
// URL del servidor al que se enviará el webhook
$webhook_url = "http://localhost:8000/server.php";

// Datos que queremos enviar al servidor (en formato JSON)
$data = array(
    "message" => "Hello, World from the client",
    "timestamp" => date('Y-m-d H:i:s')
);

// Configurar los headers para enviar datos en formato JSON
$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/json\r\n",
        'content' => json_encode($data)
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($webhook_url, false, $context); // Enviar la solicitud

echo "Server response: $response\n"; // Imprimir la respuesta del servidor
?>
