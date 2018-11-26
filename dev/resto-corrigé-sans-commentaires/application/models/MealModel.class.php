<?php

class MealModel
{
    public function listAll()
    {
        $database = new Database();

        $sql = 'SELECT * FROM Meal';

        // Récupération de tous les produits alimentaires.
        return $database->query($sql);
    }

    public function find($mealId)
    {
        $database = new Database();

        $sql = 'SELECT
                    *
                FROM Meal
                WHERE Id = ?';

        // Récupération du produit alimentaire spécifié.
        return $database->queryOne($sql, [ $mealId ]);
    }

}


?>