<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	if(array_key_exists('id', $_GET) == true)
        {
            if(ctype_digit($_GET['id']) == true)
            {
                // Récupération des informations sur l'aliment.
                $mealModel = new MealModel();
                $meal      = $mealModel->find($_GET['id']);

                //var_dump($meal);

                /*
                 * Sérialisation de l'aliment (qui est un tableau PHP) en une
                 * chaîne de caractères JSON puis envoi de la réponse HTTP.
                 */
                echo json_encode($meal);
                exit();
            }
        }

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	
    	

    }
}


?>