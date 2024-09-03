<?php
$dsn = 'mysql:host=localhost:3307;dbname=port_toamasina';
$username = 'root';
$password = 'manoynan';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stmt = $pdo->prepare("DELETE FROM equipements WHERE id = :id");
        $stmt->execute([':id' => $_POST['id']]);

        // Réaffichez le tableau mis à jour après suppression
        include 'fetch.php';
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
