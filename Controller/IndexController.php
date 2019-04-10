<?php

require_once('Controller.php');
require_once('../Model/Message.php');
require_once('../Model/Utilisateur.php');
require_once('../Service/MessageService.php');
require_once('../Service/UtilisateurService.php');

class IndexController extends Controller
{


	public function indexAction()
	{	/* mock connexion sur user 1 */
		$_SESSION['id_user'] = 1;
		$MessageService = new MessageService();
		if(isset($_POST['addMessage'])){
			$message = new Message();
			$message->setTexte($_POST['addMessage']);
			$UtilisateurService = new UtilisateurService();
			$utilisateur = $UtilisateurService->obtainOneUtilisateurById($_SESSION['id_user']);
			$message->setUtilisateur($utilisateur);
			$MessageService->insertMessage($message);
		}
		
		/*$Messages = $MessageService->getAllMessages();

		$UtilisateurService = new UtilisateurService();
		$Utilisateurs = $UtilisateurService->getAllUtilisateursConnect();*/
		/*
		echo '<pre>';
		var_dump(array('messages'=> $Messages,'utilisateurs' => $Utilisateurs));
		echo '</pre>';
		*/
		$this->render('index.html.php',array());
	}

	public function updateIndexAction()
	{	
		$MessageService = new MessageService();
		$Messages = $MessageService->getAllMessages();
		

		$UtilisateurService = new UtilisateurService();
		$Utilisateurs = $UtilisateurService->getAllUtilisateursConnectTab();
		$UtilisateurService->updateUtilisateur($_SESSION['id_user']);
		header('Content-Type: application/json');
		echo json_encode(array('messages'=> $Messages,'utilisateurs' => $Utilisateurs));
		exit;
	}


	public function error404Action()
	{	
		$this->render('error.html.php',array('codeError'=>'404'));
	}

	public function error500Action()
	{	
		$this->render('error.html.php',array('codeError'=>'500'));
	}

}