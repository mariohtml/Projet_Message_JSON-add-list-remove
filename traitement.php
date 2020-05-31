<?php
if(isset($_POST['nom']))
{
	//effectuer une action
	
	$message = array() ;
	
	$message['nom'] = $_POST['nom'] ;
	$message['email'] = $_POST['email'] ;
	$message['contenu'] = $_POST['message'] ;
	$message['date'] = date("d/m/Y à H:h:i") ;
	
	$message['id'] = date("dmYhis") ;
	
	$js = file_get_contents('messages.json') ;
	
	$js = json_decode($js, true) ;  // si on laise ($js) sans true on obtien un objet (true nous permet de convertir en tableau)
	
	$js[] = $message ;
	
	$js = json_encode($js) ;
	
	file_put_contents('messages.json' , $js) ; 
	
	header("location: ./") ;
}
	
	else if(isset($_GET['del'])){
			$messages = file_get_contents('messages.json') ;
			$messages = json_decode($messages, true) ;
			
			$verifier = array();
			for($i = 0; $i<count($messages) ; $i++)
			{
				if($messages[$i]['id'] != $_GET['del'])
				{
					$verifier[] = $messages[$i] ;
				}
			}
			
			$verifier = json_encode($verifier);
			file_put_contents('messages.json', $verifier) ;
			
			header("location: message.php") ; 		
	}
	
