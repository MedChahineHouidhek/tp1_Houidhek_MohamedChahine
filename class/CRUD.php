<?php
// Définition de l'interface CRUD (Create, Read, Update, Delete)
interface CRUD {
    // Méthode pour récupérer toutes les calculatrices
    public function getAllCalculator();

    // Méthode pour récupérer les détails d'une calculatrice par ID
    public function getCalculatorById($id);

    // Méthode pour ajouter une nouvelle calculatrice
    public function addCalculator($data);

    // Méthode pour mettre à jour les informations d'une calculatrice par ID
    public function updateCalculator($id, $data);

    // Méthode pour supprimer une calculatrice par ID
    public function deleteCalculator($id);
}
?>