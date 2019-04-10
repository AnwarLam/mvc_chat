<?php


class Utilisateur{

	
	/*
	* int
	*/
	private $id;

	/*
	* datetime
	*/
	private $dateConnexion;



	/*
	* string
	*/
	private $nom;


	public function setId($id){
		$this->id = $id;
	}

	public function setDateConnexion($date_connexion){
		$this->date_connexion = $date_connexion;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getId(){
		return $this->id;
	}

	public function getDateConnexion(){
		return $this->date_connexion;
	}

	public function getNom(){
		return $this->nom;
	}

}