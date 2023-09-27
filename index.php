<?php
// Configuration de la base de données
$host = "localhost";
$db = "tp1";
$user = "root";
$password = "";

// Création de la chaîne de connexion DSN
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    // Tentative de connexion à la base de données
    $oPDO = new PDO($dsn, $user, $password);

    // Si la connexion réussit, afficher un message
    if ($oPDO) {
        echo "Connecté à la base de données $db avec succès !";
    }
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher le message d'erreur
    echo $e->getMessage();
}

// Inclusion de la classe Calculator
require_once "class/Calculator.php";

// Création d'une instance de la classe Calculator
$oCalc = new calculator;

// Récupérer toutes les calculatrices
$Calc = $oCalc->getAllCalculator();

// Récupérer les détails d'une calculatrice par ID (par exemple, ID 16)
$calc = $oCalc->getCalculatorById(16);

// Données pour insérer une nouvelle calculatrice
$CalcToInsert = [
    "types" => "Scientifique",
    "Mark" => "Dollarama",
    "Annee_creation" => 2023,
    "prix" => 5
];

// Insérer une nouvelle calculatrice et stocker le résultat
$CalcInserted = $oCalc->addCalculator($CalcToInsert);

// Récupérer les détails d'une autre calculatrice par ID (par exemple, ID 8)
$CalcToUpdate = $oCalc->getCalculatorById(8);

// Mettre à jour la calculatrice en changeant la valeur du champ "Mark"
$CalcToUpdate['Mark'] = "Noname";
$oCalc->updateCalculator($CalcToUpdate["id"], $CalcToUpdate);

// Supprimer une calculatrice par ID (par exemple, ID 3)
$oCalc->deleteCalculator(3);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculatrices</title>
</head>

<body>
    <h1>Liste des Calculatrices</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Marque</th>
            <th>Année de création</th>
            <th>Prix</th>
        </tr>
        <?php foreach ($Calc as $calculator): ?>
        <tr>
            <td><?= $calculator['id'] ?></td>
            <td><?= $calculator['types'] ?></td>
            <td><?= $calculator['Mark'] ?></td>
            <td><?= $calculator['Annee_creation'] ?></td>
            <td><?= $calculator['prix'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Détails de la Calculatrice avec ID = <?= $calc['id'] ?></h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Marque</th>
            <th>Année de création</th>
            <th>Prix</th>
        </tr>
        <tr>
            <td><?= $calc['id'] ?></td>
            <td><?= $calc['types'] ?></td>
            <td><?= $calc['Mark'] ?></td>
            <td><?= $calc['Annee_creation'] ?></td>
            <td><?= $calc['prix'] ?></td>
        </tr>
    </table>

    <h2>Détails mis à jour de la Calculatrice ID = <?= $CalcToUpdate['id'] ?></h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Marque</th>
            <th>Année de création</th>
            <th>Prix</th>
        </tr>
        <tr>
            <td><?= $CalcToUpdate['id'] ?></td>
            <td><?= $CalcToUpdate['types'] ?></td>
            <td><?= $CalcToUpdate['Mark'] ?></td>
            <td><?= $CalcToUpdate['Annee_creation'] ?></td>
            <td><?= $CalcToUpdate['prix'] ?></td>
        </tr>
    </table>

</body>

</html>