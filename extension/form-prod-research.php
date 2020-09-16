<!-- Zone de recherche avancer -->
			<div class="areaReSearch">
			<h3> Recherche avancée </h3>  <!-- Titre -->
				<form method="get" action="products-research.php">

					<label class="right"> <!-- Menue sélection etat du vehicule -->
						<span> État </span>
						<select name="condition"> 
							<option value="null"> Toutes les voitures</option>
							<option value="N"> Voiture neuve </option>
							<option value="O"> Voiture d'occasion  </option>
						</select>
					</label> 


					<label>
						<span> Type de Modèle </span> <!-- Menue sélection du modèle de voiture-->
						<select name="model"> 
							<option value="null"> Tous </option>
							<option value="SUV"> SUV PEUGEOT </option>
							<option value="iOn"> PEUGEOT iOn  </option>
							<option value="RIFTER"> PEUGEOT RIFTER  </option>
							<option value="4x4"> PEUGEOT 4x4  </option>
						</select>
					</label> 

					<label>
						<span> Couleur </span> <!-- Menue de sélection de la couleur du vehicule -->
						<select disabled> 
							<option> Tous</option>
							<option> Blanc  </option>
							<option> Noir  </option>
							<option> Bleu  </option>
							<option> Rouge  </option>
						</select>
					</label> 

					

					<label class="right">  <!-- Prix maximum à filtrer dans la rehcerche -->
						<span> Budget max </span> 
						<input type="number" step="100" value="<?php if( isset($_GET["budget"]) ){ echo $_GET["budget"] ;} else{ echo "3200" ;} ?>" min="3000" name="budget"> <!-- Champ de texte numérique avec intervale -->
					</label> 

					

					<label>
						<span> Année de sortie </span> <!-- Menue de sélection de l'anée de sortie du modèle -->
						<select disabled> 
							<option > 2019 </option>
							<option> 2015  </option>
							<option> 2012  </option>
							<option> 2009  </option>
							<option> 2008  </option>
						</select>
					</label> 

					<div class="margin">
						<input <?php  if( isset($_GET["Xbudget"]) ){ echo "checked " ;} ?> type="checkbox" value="1" name="Xbudget" id="fXbudget" > <label style="display: inline-block;" for="fXbudget"> Aucun budget </label>

						<input type="submit" name="research" value="Rechercher">
					</div>
				</form>

			</div>
