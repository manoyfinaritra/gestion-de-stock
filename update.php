<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $article = $_POST['article'];
    $date = $_POST['date'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $processeur = $_POST['processeur'];
    $ram = $_POST['ram'];
    $etat = $_POST['etat'];
    $etablissement = $_POST['etablissement'];

    $sql = "UPDATE equipements SET article = ?,date = ?, marque = ?, modele = ?, processeur = ?,ram = ?,etat = ?, etablissement = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$article,$date, $marque, $modele, $processeur,$ram,$etat, $etablissement, $id]);

    // Recharge la liste des matériels après la mise à jour
    include 'fetch.php';
}
