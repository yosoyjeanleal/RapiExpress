<?php
header('Content-Type: application/json');
require_once 'conexion.php';

$database = new Database();
$db = $database->getConnection();

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->username) && !empty($data->password)) {
    $query = "SELECT id, nombre_completo, contrasena FROM usuarios WHERE usuario = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $data->username);
    $stmt->execute();
    
    if($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($data->password, $row['contrasena'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nombre_completo'];
            
            echo json_encode(array("success" => true, "message" => "Inicio de sesión exitoso"));
        } else {
            echo json_encode(array("success" => false, "message" => "Contraseña incorrecta"));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Usuario no encontrado"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Datos incompletos"));
}
?>