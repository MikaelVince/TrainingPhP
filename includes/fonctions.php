<?php
/*Fonction pour empecher l'introduction du code html dans les champs de remplissage*/
if(!function_exists('e')){
	function e($string){
		if($string){
			return htmlspecialchars($string);
		}
	}	
}

/*Fonction pour recuperer ce qui a déjà été rentré lors d'une mauvaise validation*/
if(!function_exists('get_input')){
	function get_input($key){
		return !empty($_SESSION['input'][$key])
				? e($_SESSION['input'][$key])
				: null;
	}
}

/*Controle si le champs n'est pas vide*/
if(!function_exists('not_empty')){
	function not_empty($fields= []){
		if(count($fields) !=0){
			foreach($fields as $field){
				if(empty($_POST[$field]) || trim($_POST[$field])==""){
					return false;
				}
			}
			return true;
		}
	}	
}
/*Fonction pour rediriger sur une autre page*/
if(!function_exists('redirect')){
	function redirect($page){
		header('Location: '.$page);
		exit();
	}
}
/*Gerer les messages flash*/
if(!function_exists('set_flash')){
		function set_flash($message, $type = 'info'){
			$_SESSION['notification']['message'] = $message;
			$_SESSION['notification']['type'] = $type;		
		}
	}

/*Garder les infos en cas d'erreur*/	
if(!function_exists('save_input_data')){
	function save_input_data(){
		foreach($_POST as $key=> $value){
			if(strpos($key, 'password') === false){
				$_SESSION['input'][$key] = $value;
			}	
		}
	}
}
/*Effacer les données entrées dans les champs*/
if(!function_exists('clear_input_data')){
	function clear_input_data(){
		if(isset($_SESSION['input'])){
			$_SESSION['input']=[];
		}
	}
}

/*Controler si la donnée a déjà été utilisée (par exemple même email lors de l'inscription)*/
if(!function_exists('is_already_in_use')){
	function is_already_in_use($field, $value, $table){
		global $db;
		$q = $db->prepare("SELECT idcli FROM $table WHERE $field = ?");
		$q->execute([$value]);
		$count = $q->rowCount();
		
		$q->closeCursor();
		return $count;
	}
}
?>