<?php

include 'classes/Database.class.php';
include 'classes/User.class.php';


if(empty($_POST) == false) {

	$user = new User();

	$user->saveUser($_POST['FirstName'], $_POST['LastName'], $_POST['Email'], $_POST['Password']);

	

}


?>


<form id="register-form" class="generic-form" action="register.php" method="POST">

	<label>Nom</label>
    <input type="text" name="LastName"/>
    <label>Prénom</label>
    <input type="text" name="FirstName"/>
    <label>Email</label>
    <input type="text" name="Email"/>
    <label>Password</label>
    <input type="text" name="Password"/>

	<input type="submit" value="envoyer"/>


</form>