<?php

class ValidateController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
        if(array_key_exists('user', $_SESSION) == false) {

            $http->redirectTo('/');

        }

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	
         */
    	if(empty($_POST) == false) {

            var_dump($_POST);
            $totalOrder = json_decode($_POST['totalOrder']);
            for ($i = 0; $i < count($totalOrder); $i++){
               
                $mealModel =new MealModel();
                $secure = $mealModel->find($totalOrder[$i]->mealId);


                $totalOrder[$i]->securePrice = $secure['SalePrice'];

            }


            var_dump($totalOrder);

            $orderModel = new OrderModel();
            $orderId = $orderModel->validate(
                $_SESSION['user']['UserId'],
                $totalOrder
            );

            $http->redirectTo('/order/payment?orderId='.$orderId);

            
        }

    }
}


?>