<?php session_start();

require_once('../Config/config.php');
if (ENVIRONNEMENT == 'dev') {
	error_reporting( E_ALL );
}
$cheminIndex = realpath('index.php');
$cheminProjet = explode('/Public/index.php',$cheminIndex)[0];

define('CHEMINABS',$cheminProjet);
require_once('../Controller/IndexController.php');

//$method = 'error404Action';
$method = 'indexAction';
if (isset($_GET['a'])) {
	$method = $_GET['a'].'Action';
}

$index = new IndexController();

if(method_exists($index,$method))
{
	$index->$method();
}else{
	$index->indexAction();
	//$index->error404Action();
}