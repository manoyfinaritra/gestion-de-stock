<?php
include ('db_connection.php'); // Votre fichier de configuration de base de données

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_BCRYPT);

        // Validation simple
        if (empty($nom) || empty($prenom) || empty($email) || empty($motdepasse)) {
            echo json_encode(['success' => false, 'message' => 'Tous les champs sont obligatoires.']);
            exit;
        }

        // Préparer et exécuter la requête
        $stmt = $pdo->prepare('INSERT INTO inscription (nom, prenom, email, motdepasse) VALUES (:nom, :prenom, :email, :motdepasse)');
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':motdepasse' => $motdepasse,
        ]);

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Requête non valide.']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Erreur du serveur: ' . $e->getMessage()]);
}

