<h1>Questionner un webservice pour récupérer la liste des régions 
via l'api endpoint : https://geo.api.gouv.fr/departements</h1>
<?php
    /*
    * Utilisation de la librairie HTTPClient de Symfony en mode Standalone.
    * Voir documentation ici : https://symfony.com/doc/current/http_client.html
    * Warning : USAGE EN STANDALONE (pensée à consulter les bon onglets de 
    * code source dans la documentation).
    */

    // La librairie s'install via Composer.
    include "../vendor/autoload.php";

    // Utilisation du bon namespace.
    // Rappel sur les namespace voir : 
    use Symfony\Component\HttpClient\HttpClient;

    //Création d'un objet $client de la classe HTTPClient via la Factory 
    // accessible via méthode statique de classe ::create();
    $client = HttpClient::create();
    
    //on prépare la requete vers l'API
    $response = $client->request('GET', 'https://geo.api.gouv.fr/departements');
    
    //on exécute la requete
    $data = $response->getContent();
    
    //deserialiser les données 
    $deserializedData = json_decode($data);
    
    //on parcours et on affiche les données.
    foreach($deserializedData as $record) {
        echo $record->nom." (".$record->code." )";
        echo "<br />";
    }


    // Pour aller plus loin voir Serialisation d'objet et déserialisation.
    // Exemple de librairie: Le serialiser de Symfony. 
    