<?php
header('Content-Type: application/json');
require_once 'conexion.php';

$database = new Database();
$db = $database->getConnection();

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->nombre) && !empty($data->email) && !empty($data->usuario) && !empty($data->contrasena)) {
    // Verificar si el usuario o email ya existen
    $query = "SELECT id FROM usuarios WHERE usuario = :usuario OR email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":usuario", $data->usuario);
    $stmt->bindParam(":email", $data->email);
    $stmt->execute();
    
    if($stmt->rowCount() > 0) {
        echo json_encode(array("success" => false, "message" => "El usuario o email ya están registrados"));
    } else {
        // Insertar nuevo usuario
        $query = "INSERT INTO usuarios (nombre_completo, email, usuario, contrasena) 
                  VALUES (:nombre, :email, :usuario, :contrasena)";
        $stmt = $db->prepare($query);
        
        $hashed_password = password_hash($data->contrasena, PASSWORD_BCRYPT);
        
        $stmt->bindParam(":nombre", $data->nombre);
        $stmt->bindParam(":email", $data->email);
        $stmt->bindParam(":usuario", $data->usuario);
        $stmt->bindParam(":contrasena", $hashed_password);
        
        if($stmt->execute()) {
            echo json_encode(array("success" => true, "message" => "Usuario registrado con éxito"));
        } else {
            echo json_encode(array("success" => false, "message" => "Error al registrar el usuario"));
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Datos incompletos"));
}
?>