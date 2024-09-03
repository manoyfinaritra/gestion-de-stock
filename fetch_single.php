<?php
require 'db_connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("SELECT * FROM equipements WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);
}
