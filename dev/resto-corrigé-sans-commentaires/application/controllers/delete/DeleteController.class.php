<?php

class DeleteController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

    	if(array_key_exists('user', $_SESSION) == false) {

            $http->redirectTo('/');

        }

        $orderModel = new OrderModel();
        $order = $orderModel->find($_GET['orderId']);

        var_dump($order);
        var_dump($_GET['orderId']);

     	 if ($order['User_Id'] == $_SESSION['user']['UserId'] && $order['User_Id'] == "not payed" ) {
        	$orderModel->deleteOrder($_GET['orderId']);

        	$http->redirectTo('/order');
        	exit();

        } else {

        	$http->redirectTo('/user/login');
        	exit();
        }
        

    }


    public function httpPostMethod(Http $http, array $formFields)
    {


    }


}