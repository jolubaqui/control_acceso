<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"));

$usuarioID = $data->usuarioID;
$tipo = $data->tipo;
$hora = date("Y-m-d H:i:s");

$conexion = new mysqli("localhost", "root", "", "control_asistencia");

if ($conexion->connect_error) {
    die(json_encode(["message" => "Error de conexión"]));
}

$sql = "INSERT INTO registros (usuario_id, tipo, hora) VALUES ('$usuarioID', '$tipo', '$hora')";
if ($conexion->query($sql) === TRUE) {
    echo json_encode(["message" => "Registro exitoso"]);
} else {
    echo json_encode(["message" => "Error en el registro"]);
}

$conexion->close();
