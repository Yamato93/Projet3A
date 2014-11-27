/**
 * Call controller in Ajax
 * 
 */
	function traiterFlux(flux){
		//contenu = "<ul>";
		$.each(flux, function(key, value){
			
			if( value == 1 )
			{
				alert('Bien indentifier');
				//contenu += "<li>Key : "+key+" - Value : "+value+"</li>";	
				//$("#formLogin").remove();
				$("#formLogin").replaceWith("<a href='index.php?module=connection&action=deco'>Se deconnecter</a>");
				$("#affichage").remove();
			}
			
		});
		//contenu += "</ul>";
		
		//$("#affichage").html(contenu);
	}
	
	$(document).ready( function() {
		$("#formLogin").on('submit', function(e)
		{
			// on désactive le comportement par défaut (submit)
			e.preventDefault();
			$.ajax({
				// URL du traitement sur le serveur
				url	 :'index.ajax.php?module=sample&action=sample',
				// Type de requête
				type :'post',
				// Parametres envoyés
				data :  
					/* Login : $('#Login').val(), 
					   Password : $('#password').val()
					*/
					$(this).serialize(),
				//On précise le type de flux
				dataType: 'json',
				// Traitement en cas de succès : on reçoit le flus dans data
				success: function(data) {
					console.log(data);
					traiterFlux(data);
				},
				error: function(jqXHR, textStatus, errorThrown)
				{
					console.log(textStatus);
					console.log(errorThrown);
					console.log("Erreur execution requete AJAX !");
				}
			});
		});
	});





