<?php

class Dao{

	protected $pdo;

	public function getPdo(){
		$dbh = new PDO('mysql:host='.host_bdd.';dbname='.dbname_bdd, name_bdd, password_bdd);
		return $dbh;
	}


	public function __construct(){
		  $this->pdo = $this->getPdo();
	}

	public function insertMessage($objMessage){

		$texte = $objMessage->getTexte();
		$utilisateurid = intval($objMessage->getUtilisateur()->getId());
		$req = $this->pdo->prepare("INSERT INTO Message (date_creation, texte, utilisateurid) VALUES (NOW(), '".$texte."',  ".$utilisateurid.")");
        $req->execute();
/*array(
            "texte" => $texte, 
            "utilisateurid" => $utilisateurid
            )*/
		return true;
	}

	public function insertUtilisateur($objUtilisateur){

		return true;
	}

	public function updateUtilisateur($id){
      
		return true;
	}

	public function searchTabMessages(){


		$stmt = $this->pdo->prepare('select * from Message');
		$stmt->execute();
		$tabMessages = $stmt->fetchAll();

		return $tabMessages;
	}

	public function searchAllUtilisateursConnect(){
		/* mock user*/
		$tabUsers = array();
		$tabUsers[0]['id'] = 1;
		$tabUsers[0]['nom'] = 'testUsers';
		$now = new DateTime();
		$tabUsers[0]['date_connexion'] = $now;
		return $tabUsers;
	}

	public function changeTabToObjectUtilisateur($tabUtilisateur){
		$Utilisateur = new Utilisateur();

		$Utilisateur->setId($tabUtilisateur['id']);

		$Utilisateur->setNom($tabUtilisateur['nom']);
		$Utilisateur->setDateConnexion(new dateTime());

		return $Utilisateur;
	}


	public function changeTabToObjectMessage($tabMessage){
		$Message = new Message();

		$Message->setId($tabMessage['id']);

		$utilisateur =  $this->obtainOneUtilisateurById($tabMessage['utilisateurid']);  

		$Message->setUtilisateur($utilisateur);
		$Message->setTexte($tabMessage['texte']);
		$Message->setDateCreation(new DateTime());

		return $Message;
	}

	public function obtainAllObjectMessage(){
		$tabMessages = $this->searchTabMessages();
		$tabOjt = array();
		foreach ($tabMessages as $key => $value) {
			$tabOjt[] = $this->changeTabToObjectMessage($value);
		}
		return $tabOjt;
	}

	public function obtainAllObjectUtilisateurConnect(){
		$tabPersonne = $this->searchAllUtilisateursConnect();
		$tabOjt = array();
		foreach ($tabPersonne as $key => $value) {
			$tabOjt[] = $this->changeTabToObjectUtilisateur($value);
		}
		return $tabOjt;
	}

	public function obtainOneUtilisateurById($id){
		/* mock user*/
		$tabUsers = array();
		$tabUsers['id'] = 1;
		$tabUsers['nom'] = 'testUsers';
		$now = new DateTime();
		$tabUsers['date_connexion'] = $now;
		return $this->changeTabToObjectUtilisateur($tabUsers);
	}


}