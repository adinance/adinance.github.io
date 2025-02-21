<?php
// api.php
header("Content-Type: application/json");

// Include database connection
require 'db.php';

// Get HTTP method
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

// Routes based on HTTP method
switch ($method) {
    case 'GET': // Read
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $stmt = $pdo->query("SELECT * FROM users");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        echo json_encode($result);
        break;

    case 'POST': // Create
        $name = $input['name'];
        $email = $input['email'];
        $age = $input['age'];

        $stmt = $pdo->prepare("INSERT INTO users (name, email, age) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $age]);
        echo json_encode(['id' => $pdo->lastInsertId()]);
        break;

    case 'PUT': // Update
        $id = $_GET['id'];
        $name = $input['name'];
        $email = $input['email'];
        $age = $input['age'];

        $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ?, age = ? WHERE id = ?");
        $stmt->execute([$name, $email, $age, $id]);
        echo json_encode(['message' => 'User updated']);
        break;

    case 'DELETE': // Delete
        $id = $_GET['id'];

        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['message' => 'User deleted']);
        break;

    default:
        http_response_code(405);
        echo json_encode(['message' => 'Method not allowed']);
        break;
}
?>