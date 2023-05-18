jQuery( document ).ready( function($) {
	// j'ajoute un évènement sur le clic des liens…
	// … ayant la class "ajax"
	$( document ).on( 'click', 'article .post-text a', function() {
		$.ajax({
			url : $(this).attr('href'), // à adapter selon la ressource
			method : 'POST', // GET par défaut
			data : {
				var1 : 'valeur1',
				var2 : 'valeur2'
			}, // mes variables
			headers : {}, // si je souhaite modifier les entêtes
			success : function( data ) { // en cas de requête réussie
				// construit l'url du fichier css à charger à partir de data
                // creer la balise à intégrer
                //integre la balise
			},
			error : function( data ) { // en cas d'échec
				// Sinon je traite l'erreur
				console.log( 'Erreur…' );
			}
		});
	});
});