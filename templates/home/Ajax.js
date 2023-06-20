function loadMarkers(type) {
  // Effectue une requête AJAX vers la route appropriée dans ton contrôleur
  // Envoie le paramètre 'type' pour spécifier le type de marqueurs à récupérer
  // Par exemple, '/api/markeurs?type=type1'
  // Dans la réponse de la requête, tu recevras les marqueurs correspondants

  // Une fois la réponse reçue, utilise les données pour mettre à jour la carte
  // Par exemple, parcours les marqueurs et ajoute-les à la carte en utilisant les coordonnées

  // Voici un exemple simple pour afficher les marqueurs dans la console :
  console.log('Type de marqueur sélectionné :', type);
}