<?php


class UtilisateurService
{
	public function getAllUtilisateursConnect(){
		$dao = new Dao();
		return $dao->obtainAllObjectUtilisateurConnect();
	}

	public function getAllUtilisateursConnectTab(){
		$dao = new Dao();
		return $dao->searchAllUtilisateursConnect();
	}

	public function obtainOneUtilisateurById($id){
		$dao = new Dao();
		return $dao->obtainOneUtilisateurById($id);
	}

	public function updateUtilisateur($id){
		$dao = new Dao();
		return $dao->updateUtilisateur($id);
	}
	
}	