<?php
header("Content-Type: application/json");
require "db.php";
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':  
        try {
            $stmt = $pdo->query("SELECT * FROM filmek");
            $readData=$stmt->fetchAll();
            echo json_encode(['status' => 'Read success!', "readData"=>$readData]);
        }
        catch(PDOException $e) {
          echo json_encode(['status' => 'Read error!']);
        }
        break;
    case 'POST':
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $stmt = $pdo->prepare("INSERT INTO filmek (cim, gyartas, hossz, bemutato, youtube) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$data['cim'], $data['gyartas'], $data['hossz'], $data['bemutato'], $data['youtube']]);
            echo json_encode(['status' => 'Create success!']);
        }
        catch(PDOException $e) {
          echo json_encode(['status' => 'Create error!']);
        }
        break;
    case 'PUT':
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $stmt = $pdo->prepare("UPDATE filmek SET cim=?, gyartas=?, hossz=?, bemutato=?, youtube=? WHERE id=?");
            $stmt->execute([$data['cim'], $data['gyartas'], $data['hossz'], $data['bemutato'], $data['youtube']]);
            echo json_encode(['status' => 'Update success!']);
        }
        catch(PDOException $e) {
          echo json_encode(['status' => 'Update error!']);
        }
        break;
    case 'DELETE':
        try {
            $data = json_decode(file_get_contents("php://input"), true);
            $stmt = $pdo->prepare("DELETE FROM filmek WHERE id=?");
            $stmt->execute([$data['id']]);
            echo json_encode(['status' => 'Delete success!']);
        }
        catch(PDOException $e) {
          echo json_encode(['status' => 'Delete error!']);
        }
        break;
}
