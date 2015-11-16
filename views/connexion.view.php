<?php $title = "Connexion"; ?>
<?php include('partials/_header.php');?>
	<div id="main-content">
		 <div class="container">
			<h1 class="lead">Connexion</h1>
			
			<?php include('partials/_errors.php'); ?>
			<form data-parsley-validate method="post" class="well col-md-6">
				<!--Email-->
				<div class="form-group">
					<label class="control-label" for="identifiant">Email:</label>
					<input type="email" value="<?= get_input('email')?>" class="form-control" id="email" name="email" required="required"/>
				</div>	
				<!--Mot de passe-->
				<div class="form-group">
					<label class="control-label" for="password">Mot de passe:</label>
					<input type="password" class="form-control" id="password" name="password" required="required"/>
				</div>	
				<input type="submit" class="btn btn-primary" value="Connexion" id="login" name="login"/>
			</form>
		</div><!-- /.container -->
	</div>
<?php include('partials/_footer.php');