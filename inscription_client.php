<?php
session_start();
require('includes/fonctions.php');
require('includes/constants.php');
require('config/database.php');


	if(isset($_POST['register'])){
		if(not_empty(['nom','prenom','naissance','sexe','adresse','ville','pays','telephone','email','password','password_confirm'])){
			$errors =[];
			extract($_POST);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors[]= "Ceci n'est pas une adresse email valide!";
			}
			
			if(is_already_in_use('melcli', $email, 'client')){
				$errors[]= "Adresse Email déjà utilisé!";
			}
			
			if(mb_strlen($password) < 6){
				$errors[] ="Mot de passe trop court! (Minimum 6 caractères)";
			} else {
				if($password != $password_confirm){
					$errors[]= "Les deux mots de passe ne sont pas identiques!";
				}
			}
			
			
			
			if(count($errors)== 0){
			$password = sha1($password);
						
			$q = $db->prepare('insert into client(nomcli, precli, naicli, sexcli, adrcli,vilcli,paycli,telcli,melcli,motcli)
			values(:nom, :prenom, :naissance, :sexe, :adresse, :ville, :pays, :telephone, :email, :password)');
			
			$q->execute([
					'nom' =>$nom,
					'prenom' =>$prenom,
					'naissance' =>$naissance,
					'sexe' =>$sexe,
					'adresse' =>$adresse,
					'ville' =>$ville,
					'pays' =>$pays,
					'telephone' =>$telephone,
					'email' =>$email,
					'password' =>$password
					]);
					
			ob_start();
			set_flash('Compte crée !', 'success');	
			redirect('index.php');
			}else{
				save_input_data();
			}
		}else{
		$errors[]="Veuiller remplir tous les champs s'il vous plait!";
		save_input_data();
 		}
	}else{
		clear_input_data();
	}
?>



<?php require('views/inscription_client.view.php');
?>