<?php $title="InscriptionP";
	include('partials/_header.php');
?>
<div id="main-content">
		 <div class="container">
			<h1>Inscription Professeur</h1>
			<h5>Information Personnelles</h5>
		<div class="well col-md-12">
			<form data-parsley-validate method="post">
				<div class="well col-md-6">
				<!--Nom-->
				<div class="form-group">
					<label class="control-label" for="nom">Nom:</label>
					<input type="text" value="<?= get_input('nom')?>" class="form-control" id="nom" name="nom" required="required"/>
				</div>	
				<!--Prénom-->
				<div class="form-group">
					<label class="control-label" for="prenom">Prénom:</label>
					<input type="text" value="<?= get_input('prenom')?>" class="form-control" id="prenom" name="prenom" required ="required" data-parsley-minlength="3"/>
				</div>	
				<!--Date de naissance-->
				<div class="form-group">
					<label class="control-label" for="naissance">Date de naissance:</label>
					<input type="text" value="<?= get_input('naissance')?>" class="form-control" id="naissance" name="naissance" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Sexe-->
				<div class="form-group">
					<label class="control-label" for="sexe">Sexe</label>
					<select required="required" name="sexe" id="sexe" class="form-control">
						<option value="H">Homme</option>
						<option value="F">Femme</option>
					</select>
				</div>
				<!--Adresse-->
				<div class="form-group">
					<label class="control-label" for="adresse">Adresse:</label>
					<input type="text" value="<?= get_input('adresse')?>" class="form-control" id="adresse" name="adresse" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Ville-->
				<div class="form-group">
					<label class="control-label" for="ville">Ville:</label>
					<input type="text" value="<?= get_input('ville')?>" class="form-control" id="ville" name="ville" required="required" data-parsley-trigger="change"/>
				</div>
			</div>
			<div class="well col-md-6">
				<!--Pays-->
				<div class="form-group">
					<label class="control-label" for="pays">Pays:</label>
					<input type="text" value="<?= get_input('pays')?>" class="form-control" id="pays" name="pays" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Telephone-->
				<div class="form-group">
					<label class="control-label" for="telephone">Telephone:</label>
					<input type="text" value="<?= get_input('telephone')?>" class="form-control" id="telephone" name="telephone" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Email-->
				<div class="form-group">
					<label class="control-label" for="email">Adresse Email:</label>
					<input type="email" value="<?= get_input('email')?>" class="form-control" id="email" name="email" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Mot de passe-->
				<div class="form-group">
					<label class="control-label" for="password">Mot de passe:</label>
					<input type="password" class="form-control" id="password" name="password" required="required"/>
				</div>
				<!--Confirmation mot de passe-->
				<div class="form-group">
					<label class="control-label" for="password_confirm">Confirmez votre Mot de passe:</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" data-parsley-equalto="#password"/>
				</div>
				
			</form>
			</div>
			</div>
			<h5>Information Professionnelles</h5>
		<div class="well col-md-12">
			<form data-parsley-validate method="post">
				<div class="well col-md-6">
				<!--Nom-->
				<div class="form-group">
					<label class="control-label" for="nom">Nom:</label>
					<input type="text" value="<?= get_input('nom')?>" class="form-control" id="nom" name="nom" required="required"/>
				</div>	
				<!--Prénom-->
				<div class="form-group">
					<label class="control-label" for="prenom">Prénom:</label>
					<input type="text" value="<?= get_input('prenom')?>" class="form-control" id="prenom" name="prenom" required ="required" data-parsley-minlength="3"/>
				</div>	
				<!--Date de naissance-->
				<div class="form-group">
					<label class="control-label" for="naissance">Date de naissance:</label>
					<input type="text" value="<?= get_input('naissance')?>" class="form-control" id="naissance" name="naissance" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Sexe-->
				<div class="form-group">
					<label class="control-label" for="sexe">Sexe</label>
					<select required="required" name="sexe" id="sexe" class="form-control">
						<option value="H">Homme</option>
						<option value="F">Femme</option>
					</select>
				</div>
				<!--Adresse-->
				<div class="form-group">
					<label class="control-label" for="adresse">Adresse:</label>
					<input type="text" value="<?= get_input('adresse')?>" class="form-control" id="adresse" name="adresse" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Ville-->
				<div class="form-group">
					<label class="control-label" for="ville">Ville:</label>
					<input type="text" value="<?= get_input('ville')?>" class="form-control" id="ville" name="ville" required="required" data-parsley-trigger="change"/>
				</div>
				<input type="submit" class="btn btn-primary" value="Inscription" name="register"/>
			</div>
			<div class="well col-md-6">
				<!--Pays-->
				<div class="form-group">
					<label class="control-label" for="pays">Pays:</label>
					<input type="text" value="<?= get_input('pays')?>" class="form-control" id="pays" name="pays" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Telephone-->
				<div class="form-group">
					<label class="control-label" for="telephone">Telephone:</label>
					<input type="text" value="<?= get_input('telephone')?>" class="form-control" id="telephone" name="telephone" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Email-->
				<div class="form-group">
					<label class="control-label" for="email">Adresse Email:</label>
					<input type="email" value="<?= get_input('email')?>" class="form-control" id="email" name="email" required="required" data-parsley-trigger="change"/>
				</div>
				<!--Mot de passe-->
				<div class="form-group">
					<label class="control-label" for="password">Mot de passe:</label>
					<input type="password" class="form-control" id="password" name="password" required="required"/>
				</div>
				<!--Confirmation mot de passe-->
				<div class="form-group">
					<label class="control-label" for="password_confirm">Confirmez votre Mot de passe:</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" data-parsley-equalto="#password"/>
				</div>
				
				
			</form>
			</div>
			</div>
		</div>
	</div>

			
<?php include('partials/_footer.php');?>