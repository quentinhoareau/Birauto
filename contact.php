<!DOCTYPE html>
<HTML>
	<?php include "extension/head.php"; ?>
		<title>	Nous contacter - Birauto  </title>
		<link rel="stylesheet"  type="text/css" href="css/contact.css">
	</head>
<body>

<!-- BARRE DE NAVIGATION + BANNIERE -->
	<?php include "extension/nav.php" ?>
<!-- ------------------------------ -->


	<!-- Contenu de la page principale -->
		<div class="pageContent">


			<h2> Nous contacter  </h2> <!-- Titre de la page -->
		
			<div class="pageContentPadding"> <!-- Marge du contenu interieur de la page principale -->

				<!--partie sur les horaires, contacts-->
					<div class="right">
					 	
					 		<div class="title"> Par téléphone </div>
					 	 		<div class="info">
					 	 			Du lundi au vendredi : 9h-19h <br/>
					 	 			Samedi : 9h-12h et 14h-17h <br/>
					 	 			0692 32 57 85
					 	 		</div>  
					 	
					 		<div class="title"> Par courrier </div> 
						 		<div class="info">BIRAUTO <br/> 
						 			22, rue des papangues <br/>
						 			Saint-Joseph 97480 <br/>
						 		</div>
					 		

					 		<div class="title"> Par mail </div>
					 			<div class="info">
					 				<div> contact@birauto.fr
					 			</div>
					 		</div> 

					 </div>
	
 
			<!--------creation du formulaire------->
				<form method="post" action="extension/insert-contact.php">

					<div class="center"><!-- balise avec une classe pour centrer-->
						<div class="formIntro"> <!-- pour intro du formulaire-->
							<h1> Un renseignement ? </h1>
							<p> 
								Pour tout renseignement commercial sur l’un de nos modèles ou pour tout autre demande, <br/>
								nos conseillers sont là pour vous répondre.
							</p>

						</div>
					
				 		<!--creation des champs-->
							<input type="text" placeholder="Nom" size="30" maxlength="15" name="name" />
							<input type="email" placeholder="Adresse mail" size="30" maxlength="100" name="email" />
							<input type="text" placeholder="Numéro" size="30" maxlength="10" name="tel" />
						
						<!--creation de la liste déroulante-->
							<select name="object">
								  <option value="subject">Sujet</option>
								  <option class="categSujet" value="problem">PROBLEMES LIES AU SITE</option>
								  <option value="account">Compte volé</option>
								  <option value="id">Identifiants oubliés</option>
								  <option class="categSujet" value="buy">ACHAT</option>
								  <option value="guarantee">Garantie</option>
								  <option value="refund">Demande de remboursement</option>
								  <option class="categSujet" value="location">LOCATIONS</option>
								  <option value="guarantee">Réparation</option>
				  			</select>
			       		
			       		<textarea name="message" placeholder="Votre message" name="message"></textarea> <!--creation de la zone de texte-->
			       		<input type="submit" value="Envoyer" class="button" name="formContact"> <!--creation du bouton envoyer-->

			       	</div>
				 </form>
			<!-- ---------------------------------- -->				 	
		 	

		 	<!--partie sur la prise de rdv-->
			 	<div class="bullRdv">
			 		<img src="medias/question.png" alt="question"><!-- css: égaiser l'image avec la bulle-->
						<div class="bullInfo">
							<h1>Besoin d'un rendez-vous ?</h1> 
		  					<p>
		  						Pour toutes prises de rendez-vous, veuillez nous joindre<br/> au 0262 59 63 41
		  						ou du lundi au vendredi de 9h à 19h. 
		  						
		  					</p>
						</div>
				</div>

			
		 	</div>
		</div>



	</body>


	</HTML>