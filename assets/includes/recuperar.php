<?php
header('Content-Type: application/json');
require_once 'conexion.php';

$database = new Database();
$db = $database->getConnection();

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->email)) {
    // Verificar si el email existe
    $query = "SELECT id, nombre_completo FROM usuarios WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":email", $data->email);
    $stmt->execute();
    
    if($stmt->rowCount() > 0) {
        // En una aplicación real, aquí enviarías un correo con un enlace para restablecer la contraseña
        // Por ahora solo simulamos el envío
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $nombre = $row['nombre_completo'];
        
        echo json_encode(array(
            "success" => true, 
            "message" => "Se han enviado instrucciones para restablecer tu contraseña al correo proporcionado"
        ));
    } else {
        echo json_encode(array("success" => false, "message" => "El correo no está registrado"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Por favor ingresa tu correo electrónico"));
}
?>