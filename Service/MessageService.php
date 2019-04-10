<?php

require_once('../Model/Message.php');
require_once('../Model/Utilisateur.php');
require_once('../DAO/Dao.php');

class MessageService 
{
	
	public function insertMessage($message){
		$dao = new Dao();
		return $dao->insertMessage($message);
	}


	public function getAllMessages(){
		$dao = new Dao();
		$Messages = $dao->obtainAllObjectMessage();
		$MessagesTab = array();
		$i = 0;
		foreach ($Messages as $key => $value) {
			$MessagesTab[$i]['texte'] = $value->getTexte();
			$MessagesTab[$i]['utilisateur'] = $value->getUtilisateur()->getNom();
			$MessagesTab[$i]['dateCreation'] = $value->getDateCreation()->format('d/m/Y h:i:s');
			$i++;
		}

		return $MessagesTab;
	}

	public function getAllMessagesTab(){
		$dao = new Dao();
		return $dao->searchTabMessages();
	}

}