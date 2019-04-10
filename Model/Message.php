<?php

require_once('Utilisateur.php');

class Message{
	
	/*
	* int
	*/
	private $id;

	/*
	* datetime
	*/
	private $date_creation;

	/*
	* text
	*/
	private $texte;

	/*
	* utilisateur
	*/
	private $Utilisateur;

	public function __construct(){
		$this->date_creation = new Datetime();
	}
	public function setId($id){
		$this->id = $id;
	}

	public function setTexte($texte){
		$this->texte = $texte;
	}

	public function setDateCreation($date_creation){
		$this->date_creation = $date_creation;
	}

	public function setUtilisateur($Utilisateur){
		$this->Utilisateur = $Utilisateur;
	}

	public function getId(){
		return $this->id;
	}

	public function getTexte(){
		return $this->texte;
	}

	public function getDateCreation(){
		return $this->date_creation;
	}

	public function getUtilisateur(){
		return $this->Utilisateur;
	}


}