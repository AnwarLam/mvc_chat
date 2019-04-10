$(document).ready(function(){

	setInterval(function(){
		reload();
	},1000);
});


function reload(){
	    $.ajax({

       url : '/index.php?a=updateIndex',
		type : 'POST',
		dataType : 'json',
	   success : function(data){
	   	var messages = '';
	   	var utilisateurs = '';
	   	for (var i = data['messages'].length - 1; i >= 0; i--) {
	   		console.log(data['messages']);
	   		 messages = messages+'<hr/>user :'+data['messages'][i]['utilisateur']+' date :'+data['messages'][i]['dateCreation']+'<br/>texte :'+data['messages'][i]['texte']+'<hr/>'
	   	}
        for (var i = data['utilisateurs'].length - 1; i >= 0; i--) {
	   		 utilisateurs = utilisateurs+'<hr/>'+data['utilisateurs'][i]['nom']+'<hr/>'
	   	}   
	   	console.log('messages :  ');
	   	console.log(messages);
	   	$('#connecter').html(utilisateurs);
	   	$('#message').html(messages);
       },
		error : function(resultat, statut, erreur){ }
		});

}