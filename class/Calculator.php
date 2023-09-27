<?php
// Inclusion du fichier qui contient l'interface CRUD
require_once('CRUD.php');

// Définition de la classe Calculator qui implémente l'interface CRUD
class calculator implements CRUD {

    // Fonction pour récupérer toutes les calculatrices depuis la base de données
    public function getAllCalculator(){
       
        global $oPDO; // Récupération de la connexion à la base de données

        // Exécution d'une requête SQL pour récupérer toutes les calculatrices, triées par ID croissant
        $oPDOStatement = $oPDO->query("SELECT * FROM calculatrice ORDER BY id ASC");

        // Récupération des résultats dans un tableau associatif
        $calculators = $oPDOStatement->fetchAll(PDO::FETCH_ASSOC);
        return $calculators;
    }

    // Fonction pour récupérer les détails d'une calculatrice par ID
    public function getCalculatorById($id){
        global $oPDO; // Récupération de la connexion à la base de données

        // Préparation de la requête SQL avec un paramètre :id
        $oPDOStatement = $oPDO->prepare("SELECT * FROM calculatrice WHERE id = :id");
        $oPDOStatement->bindParam(":id", $id, PDO::PARAM_INT); // Liaison du paramètre

        // Exécution de la requête SQL
        $oPDOStatement->execute();

        // Récupération des résultats dans un tableau associatif
        $calculators = $oPDOStatement->fetch(PDO::FETCH_ASSOC);
        return $calculators;
    }

    // Fonction pour ajouter une nouvelle calculatrice dans la base de données
    public function addCalculator($calculators){
        global $oPDO ; // Récupération de la connexion à la base de données
        
        // Préparation de la requête SQL pour l'insertion
        $oPDOStatement = $oPDO->prepare("INSERT INTO calculatrice SET types=:types, Mark=:Mark, Annee_creation=:Annee_creation, prix=:prix");
        
        // Liaison des paramètres avec les valeurs fournies
        $oPDOStatement->bindParam(":types", $calculators["types"], PDO::PARAM_STR);
        $oPDOStatement->bindParam(":Mark", $calculators["Mark"], PDO::PARAM_STR);
        $oPDOStatement->bindParam(":Annee_creation", $calculators["Annee_creation"], PDO::PARAM_INT);
        $oPDOStatement->bindParam(":prix", $calculators["prix"], PDO::PARAM_INT);
        
        // Exécution de la requête SQL
        $oPDOStatement->execute();
        
        // Vérification du nombre de lignes affectées pour déterminer si l'opération a réussi
        if ($oPDOStatement->rowCount()) {
            return $oPDO->lastInsertId(); // Retourne l'ID de la nouvelle entrée
        } else {
            return false; // Échec de l'opération
        }
    }

    // Fonction pour mettre à jour une calculatrice dans la base de données
    public function updateCalculator($id, $data){
        global $oPDO; // Récupération de la connexion à la base de données

        // Préparation de la requête SQL pour la mise à jour
        $oPDOStatement = $oPDO->prepare("UPDATE calculatrice SET types = :types, Mark = :Mark, Annee_creation = :Annee_creation, prix = :prix WHERE id = :id");
        
        // Liaison des paramètres avec les valeurs fournies
        $oPDOStatement->bindParam(":types", $data["types"], PDO::PARAM_STR);
        $oPDOStatement->bindParam(":Mark", $data["Mark"], PDO::PARAM_STR);
        $oPDOStatement->bindParam(":Annee_creation", $data["Annee_creation"], PDO::PARAM_INT);
        $oPDOStatement->bindParam(":prix", $data["prix"], PDO::PARAM_INT);
        $oPDOStatement->bindParam(":id", $id, PDO::PARAM_INT);
        
        // Exécution de la requête SQL
        $oPDOStatement->execute();
        
        // Vérification du nombre de lignes affectées pour déterminer si l'opération a réussi
        if ($oPDOStatement->rowCount()) {
            return true; // Opération réussie
        } else {
            return false; // Échec de l'opération
        }
    }

    // Fonction pour supprimer une calculatrice de la base de données par ID
    public function deleteCalculator($id){
        global $oPDO; // Récupération de la connexion à la base de données
        
        // Préparation de la requête SQL pour la suppression
        $oPDOStatement = $oPDO->prepare("DELETE FROM calculatrice WHERE id = :id");
        
        // Liaison du paramètre avec la valeur fournie
        $oPDOStatement->bindParam(":id", $id, PDO::PARAM_INT);
        
        // Exécution de la requête SQL
        $oPDOStatement->execute();
        
        // Vérification du nombre de lignes affectées pour déterminer si l'opération a réussi
        if ($oPDOStatement->rowCount()) {
            return true; // Opération réussie
        } else {
            return false; // Échec de l'opération
        }
    }
}
?>