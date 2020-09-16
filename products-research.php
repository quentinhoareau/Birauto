<!DOCTYPE html>
<HTML>
<head>
	<?php include "extension/head.php"; ?>
	<title>	Birauto - Accueil </title> <!-- Titre de l'onglet -->
	<link rel="stylesheet"  type="text/css" href="css/products.css"> <!-- Lien entre cette page et le fichier CSS indiqué -->
</head>
<body>

<?php include "extension/connection.php" ?>

<!-- BARRE DE NAVIGATION + BANNIERE -->
	<?php include "extension/nav.php" ?>
<!-- ------------------------------ -->
			
	<!-- Contenue de la page principale -->
		<div class="pageContent">


			<h2> Nos produits  </h2> <!-- Titre de la page -->



		
			<div class="pageContentPadding"> <!-- Marge du contenue interieur de la page pricnipale -->


				<?php include "extension/form-prod-research.php" ?>

			<?php 
			//Sélection de la liste des voitures par rapport à la recherche
				if( isset($_GET["research"]) ){

					if(isset($_GET["Xbudget"]) ){ $withoutBudget = $_GET["Xbudget"] ;}
					$budget = $_GET["budget"]; 
					if( isset($_GET["Xbudget"]) ){ $listCar = "SELECT * FROM car WHERE price <= (SELECT MAX(price) FROM car)"; } else{ $listCar = "SELECT * FROM car WHERE price <= $budget";}

					$condition = $_GET["condition"] ;
					if(isset($condition) && $condition != "null" ){ $listCar .= " AND car_condition = '".$condition."'"; }
					
					$model = $_GET["model"] ;
					if(isset($model) && $model != "null" ){ $listCar .= " AND model_name LIKE '%".$model."%'"; }


				
				}
				else{
					$listCar = "SELECT * FROM car";
				}

				$listCar1 = $connect->query($listCar);
			?>


			
				<div class="center">
				<!-- Cadre du Produit -->

				<?php while($listCar3 = $listCar1->fetch(PDO::FETCH_ASSOC)) { //Boucle pour afficher chaques voitures?>

					<div class="items">
						<div class="titleItems"> <?php echo $listCar3['model_name'] ?>  </div>  <!-- Titre du produit -->
						<img alt="Images" src="<?php echo $listCar3['url_img'] ?>"> <!-- Image du produit -->
						<!-- Description du produit -->
							<div class="priceItems">
								à partir de <br>
								<div class="price"> + <?php echo $listCar3['price'] ?>€ </div>
							</div>
							<?php 
							$idListCar = $listCar3['idCar'] ; //l'id de chaques voitures par bloc
							$featureCar1 = $connect->query("SELECT feature.labelFeature AS 'nomFeature'
							FROM car_feature
							INNER JOIN car ON car.idCar = car_feature.idCar
							INNER JOIN feature ON feature.idFeature = car_feature.idFeature
							WHERE car_feature.idCar = $idListCar");
							
							?>

							<?php while($featureCar3 = $featureCar1->fetch(PDO::FETCH_ASSOC)){ ?>

							
							<span> <?php echo $featureCar3['nomFeature'] ?> </span>

							<?php } ?>

						<a href="index.html">   Voir le produit   </a>

					</div>
				<?php } ?>

				</div>
			</div>

		</div>

	
</body>
</HTML>