<?php

class BookingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	if(array_key_exists('user', $_SESSION) == false) {

            $http->redirectTo('/');

        }

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        

    	$userId = $_SESSION['user']['UserId'];

        // Création de la réservation.
        $bookingModel = new BookingModel();
        $bookingModel->create
        (
            $userId,
            $_POST['bookingYear'].'-'.
            $_POST['bookingMonth'].'-'.
            $_POST['bookingDay'],
            $_POST['bookingHour'].':'.
            $_POST['bookingMinute'],
            $_POST['numberOfSeats']
        );

        // Redirection vers la page d'accueil.
        $http->redirectTo('/');

    	

    }
}


?>