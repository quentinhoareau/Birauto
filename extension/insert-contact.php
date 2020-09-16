<?php

include "connection.php";

	if($_POST["formContact"]){

		$name= htmlspecialchars($_POST["name"]);
		$email= htmlspecialchars($_POST["email"]);
		$tel= htmlspecialchars($_POST["tel"]);
		$object= htmlspecialchars($_POST["object"]);
		$message= htmlspecialchars($_POST["message"]);

		
		$req= "INSERT INTO contact(name, email, tel, object, message) 
		VALUES (?, ?, ?, ?, ?)";
		$req = $connect->prepare($req);
		$req->execute([$name, $email, $tel, $object, $message]);
		
		echo "Votre message à bien été envoyé <br>" ;
		echo "<a href='../index.php'> Cliquer ici pour retourner à l'accueil <a>" ;

	}


 ?>