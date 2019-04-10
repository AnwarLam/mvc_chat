# mvc_chat
Installation:

Le serveur doit pointer sur le dossier "Public".

Une fois le fichier test_mvc_chat.sql importé dans une base de donnée Mysql, modifier les données du fichier config.php se trouvant dans le dossier Config.




Résultat du test technique:

-          L’architecture basée sur un MVC objet est fonctionnelle.

-          La page d’authentification n'est  pas crée.
		   La connexion est mocké sur le meme utilisateur pour chaque client.

-          La page de chat avec la liste des messages est fonctionnelle.

-          Il est possible de poster un message.

-          Le listing des connectés et la mise à jour en temps réel sont mockées : il manque la requete sql qui recupere les bons utilisateurs mais le reste est codé.

-          L’affichage temps réel est fonctionnelle (reload toutes les secondes "pseudo-temps réel" à ameliorer via socket).

-          La sécurité n'est pas fonctionnelle Les requetes sont préparées mais le typage des données n'est pas vérifié et les fonction mysql_real_escape_string et htmlspecialchars n'ont pas été ajouté qui eviteraient respectivement les injections sql et les failles xss.

			de plus les dossiers autres que le dossier Public devraient etre inaccessible via .htaccess ce qui n'est pas fait.	

-          La documentation d’installation est jointe

-          Le fichier d'export de bdd est disponible dans le projet GitHub à la racine du projet : test_mvc_chat.sql


-			la gestion des erreurs n'est pas faite par exemple envoyer une exeption si un message n'a pas d'utilisateur etc

-          Le projet est disponible sur GitHub : https://github.com/AnwarLam/mvc_chat

Optimisation:

-		  ajout d'un systeme de route plus complet par réecriture d'url.