<!DOCTYPE html>
<html>
<head>
	<title>tchat</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
</head>
<body>
<h1>tchat</h1>
<h2>Utilisateurs connectés:</h2>
<div id="connecter">
	<?php 
		/*$utilisateurs = array_reverse($utilisateurs);
		foreach($utilisateurs as $key => $user) { 
	?>
		<hr/>	

			
			<?php /* echo htmlspecialchars($user->getNom());  ?>
		<hr/>	
	<?php
		}	 */
	?>
</div>
<h2>Messages:</h2>
<div id="message">
	<?php 
		/*
		$messages = array_reverse($messages);
		foreach ($messages as $key => $message) { 
	?>
		<hr/>
			user : <?php  echo htmlspecialchars($message->getUtilisateur()->getNom()); ?> date :  <?php echo $message->getDateCreation()->format('d/m/Y h:i:s');   ?>
			<br/>
			texte : <?php echo htmlspecialchars($message->getTexte()); ?>
		<hr/>	
	<?php
		}	*/ 
	?>
</div>
<h2>votre Message:</h2>
<form  method="post" action='/index.php?a=index'>
	<textarea name="addMessage" id="messageText">
		
	</textarea>

	<input type="submit" name="envoyer"/>
</form>
<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>