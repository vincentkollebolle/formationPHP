<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Exemples pédagogiques</title>
  </head>
  <body>
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                Vincent BONNIER <br />
                bonnier.vincentpro@gmail.com <br />
                <a href="https://github.com/vincentkollebolle" target="_blank">
                    https://github.com/vincentkollebolle
                </a><br />
            </div>
        </div>
        <div class="row my-4">
            <div class="col-6">
                <img src="https://dt7v1i9vyp3mf.cloudfront.net/styles/news_preview/s3/imagelibrary/S/Sonar_Notes_1-0712-GOcO.phvOS0H4qxgHsoyuszJhPbZi8bT.jpg">
            </div>
            <div class="col-6">
                <h1>KISS <small>Keep It Simple and Stupide</small></h1>
                <h1>NTU <small>Never Trust The User </small></h1>
                <h1>DRY  <small>Don't Repeat Yourself</small></h1>
                <h1>RT(f)M  <small>Read the (fucking) Manuals</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2">
                    <h1>Api</h1>
                    Permet d'exposer nos objet PHP dans un format choisi (XML, JSON etc...). <br />
                    Ensemble de <a href="https://fr.wikipedia.org/wiki/Representational_state_transfer">recommandations</a> pour créer des webservice. <br />
                    Rest vs Soap.<br />
                    JSON vs XML <br />
                    Soit on utilise des API REST <br />
                    Soit on expose notre propre API que l'on créé <br />
                    Librarie sympa: (Symfony) <a href="https://symfony.com/doc/current/http_client.html">HTTPClient</a> pour questionner les API.
                    <br />Librairie sympa pour faire nos API : (Symfony) <a href="https://symfony.com/doc/current/components/serializer.html">Serialiser</a>
                    <br />
                    Il existe des standards pour savoir comment construire ces url d'api etc... <br />
                    Jetez un oeil à : OpenAPI <br />
                    https://swagger.io/specification/<br />
                    https://www.developpez.com/actu/178434/Comprendre-la-specification-OpenAPI-Swagger-et-apprendre-a-utiliser-Swagger-Editor-par-Hinault-Romaric/
            </div>
            <div class="col-12 my-2">
                <h1>Interface</h1>
                On sent sert pour faire de la généricité.<br /> 
                Mot clé "implements".<br />
                Héritage multiples ;) (à creuser/non vu).<br />
                On peut réclammer dans une methode, un constructeur ou autre un objet qui garantie implémenter une interface
                plutôt qu'un objet d'une classe specifique :) <br />
                Permet de rendre générique et évolutif les usages de nos logiciels.
            </div>
            <div class="col-12 my-2">
                <h1>MVC-FC -Model View Controller & Front Controller-</h1>
                Métaphore du magasin de bricolage.<br />
                Présent dans tous les grands framework.<br />
                Permet d'organiser son code.<br />
                Découplage...<br />
            </div>
            <div class="col-12 my-2">
                <h1>Namespace</h1>
                Isoler notre code.<br />
                Eviter les collisions de nom (de fonctions par exemple).<br />
                Mots clé use, namespace <br />
                Namespace Qualifié vs Non Qualifié.<br />
            </div>
            <div class="col-12 my-2">
                <h1>Poo</h1>
                Poo des outils pour organiser son code, le rendre réutilisable etc...<br />
                Etre fort en POO c'est connaitre le plus de Design Pattern Possible<br />
                Observer/Observable<br />
                Singleton<br />
                Factory <br />
                Façade <br />
                Service Container /injection de dépendance <br />
                Les vocabulaires (encapsulation, polymorphisme, accesseur, getter Setter etc.etc...)
                ..... 
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>