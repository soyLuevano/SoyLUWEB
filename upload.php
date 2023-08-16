<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["video"])) {
    $uploadDir = "uploads/"; // Directorio donde se guardarán los videos
    $uploadedFile = $_FILES["video"];

    $uploadPath = $uploadDir . basename($uploadedFile["name"]);

    if (move_uploaded_file($uploadedFile["tmp_name"], $uploadPath)) {
        http_response_code(200); // Éxito en la carga
    } else {
        http_response_code(500); // Error en la carga
    }
} else {
    http_response_code(400); // Solicitud incorrecta
}
?>


