<?php
$dsn = 'mysql:host=localhost:3307;dbname=port_toamasina';
$username = 'root';
$password = 'manoynan';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Mise à jour des données existantes
            $stmt = $pdo->prepare("UPDATE equipements SET article = :article,date = :date, marque = :marque, modele = :modele, processeur = :processeur,ram = :ram,etat = :etat, etablissement = :etablissement WHERE id = :id");
            $stmt->execute([
                ':article' => $_POST['article'],
                ':date' => $_POST['date'],
                ':marque' => $_POST['marque'],
                ':modele' => $_POST['modele'],
                ':processeur' => $_POST['processeur'],
                ':ram' => $_POST['ram'],
                ':etat' => $_POST['etat'],
                ':etablissement' => $_POST['etablissement'],
                ':id' => $_POST['id']
            ]);
        } else {
            // Insertion des nouvelles données
            $stmt = $pdo->prepare("INSERT INTO equipements (article,date, marque, modele, processeur,ram, etat, etablissement) 
                                                    VALUES (:article,:date,:marque,:modele,:processeur, :ram,:etat,:etablissement)");

            $stmt->execute([
                ':article' => $_POST['article'],
                ':date' => $_POST['date'],
                ':marque' => $_POST['marque'],
                ':modele' => $_POST['modele'],
                ':processeur' => $_POST['processeur'],
                ':ram' => $_POST['ram'],
                ':etat' => $_POST['etat'],
                ':etablissement' => $_POST['etablissement']
            ]);
        }
    
        // Réaffichez le tableau mis à jour après insertion ou modification
        include 'fetch.php';
    }
}   
catch (PDOException $e) { echo "Erreur : " . $e->getMessage(); } 