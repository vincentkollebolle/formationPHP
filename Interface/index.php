<?php

echo "Script non fonctionnel, voir code source :) ";
die();


/*
* Etude et analyse de l'article du site PUTAIN DE CODE sur l'injection de dépendance
* https://putaindecode.io/articles/injection-de-dependances-en-php/
*
*/
class BasicAddress implements AddressInterface {
    private $address; 
    
    public function getFullAddress() {
        return $adress;
    }
}


class BasicAddress implements AddressInterface {
    private $address; 
    
    public function getFullAddress() {
        return $adress;
    }
}

class Address implements AddressInterface {
    private $number;
    private $street;
    private $zipcode;
    private $city;
    private $country;

    public function __construct($number, $street, $zipcode, $city, $country)
    {
        $this->number = $number;
        $this->street = $street;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->country = $country;
    }

    //getter & setter

    public function getFullAddress() {
        return $number." ".$street." ".$zipcode." ".$city." ".$country;
    }
}

// VA PLANTER !!!! 
// PLANTER en nous disant si tu dis que tu implémentes l'interface AdressInterface 
// alors tu dois proposer une implementation pour l'ensemble des attributs et l'ensemble des méthodes déclarer
// dans l'interface.
// since Address implements AddressInterface you have to declare and implements getFullAddress();

interface AddressInterface {
    public function getFullAddress();
}

class Person
{
    private $address;

    //TypeHint (préciser le type d'objet attendu)
    //Ca va demander à PHP de vérifier qu'on lui passe bien une adresse.
    // INJECTION DE DÉPENDANCE.
    public function __construct(AddressInterface $address){

        //ATTENTION ATTENTION C'EST PAS GENTIL
        //DEPENDANCE CACHÉE A L'INTERIEUR DE LA CLASSE.
        $this->address = $adress; // bug manque COUNTRY
    }
}

class PersonFactory
{
    public function createPerson($number, $street, $zipcode, $city, $country){
        $address = new BasicAddress($number, $street, $zipcode, $city, $country);
        return new Person($address); 
    }

    private function getZipcodeFromDistrict($district) {
        return 75000 + $district; // genere un code postal qui demare à partir 75000 
    }

    public function createParigot($number, $street, $district)    {

        return $this->createPerson($number, $street, $this->getZipcodeFromDistrict($district), 'Paris', 'France');
    }
}

$myfactory = new PersonFactory(); 
$person = $myFactory->createParigot("10", "rue de la roquette", "75000");

//Une usine ou Factory est un design pattern pour simplifier la création des objets
//d'UNE classe.

$dbh = DbhFactory::getMysQLDriver();
$dbh = DbhFactory::getPostGreDriver();


class DependencyInjectionContainer
{
    $pokemonInstance; // stock les pokemons créer.
    
    public function getPersonFactory()
    {
        return new PersonFactory();
    }

    public function getPokemonFactory() { .... }
    public fuction getORM() {.....}
}


$container = new DependencyInjectionContainer();

$container->getOrm()->executeQuery();
$container->getPokemonFactory();
$container->getPersonFactory();




ts AddressInterface {
    private $number;
    private $street;
    private $zipcode;
    private $city;
    private $country;

    public function __construct($number, $street, $zipcode, $city, $country)
    {
        $this->number = $number;
        $this->street = $street;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->country = $country;
    }

    //getter & setter

    public function getFullAddress() {
        return $number." ".$street." ".$zipcode." ".$city." ".$country;
    }
}

// VA PLANTER !!!! 
// PLANTER en nous disant si tu dis que tu implémentes l'interface AdressInterface 
// alors tu dois proposer une implementation pour l'ensemble des attributs et l'ensemble des méthodes déclarer
// dans l'interface.
// since Address implements AddressInterface you have to declare and implements getFullAddress();

interface AddressInterface {
    public function getFullAddress();
}

class Person
{
    private $address;

    //TypeHint (préciser le type d'objet attendu)
    //Ca va demander à PHP de vérifier qu'on lui passe bien une adresse.
    // INJECTION DE DÉPENDANCE.
    public function __construct(AddressInterface $address){

        //ATTENTION ATTENTION C'EST PAS GENTIL
        //DEPENDANCE CACHÉE A L'INTERIEUR DE LA CLASSE.
        $this->address = $adress; // bug manque COUNTRY
    }
}

class PersonFactory
{
    public function createPerson($number, $street, $zipcode, $city, $country){
        $address = new BasicAddress($number, $street, $zipcode, $city, $country);
        return new Per<?php

        class BasicAddress implements AddressInterface {
            private $address; 
            
            public function getFullAddress() {
                return $adress;
            }
        }
        
        class Address implements AddressInterface {
            private $number;
            private $street;
            private $zipcode;
            private $city;
            private $country;
        
            public function __construct($number, $street, $zipcode, $city, $country)
            {
                $this->number = $number;
                $this->street = $street;
                $this->zipcode = $zipcode;
                $this->city = $city;
                $this->country = $country;
            }
        
            //getter & setter
        
            public function getFullAddress() {
                return $number." ".$street." ".$zipcode." ".$city." ".$country;
            }
        }
        
        // VA PLANTER !!!! 
        // PLANTER en nous disant si tu dis que tu implémentes l'interface AdressInterface 
        // alors tu dois proposer une implementation pour l'ensemble des attributs et l'ensemble des méthodes déclarer
        // dans l'interface.
        // since Address implements AddressInterface you have to declare and implements getFullAddress();
        
        interface AddressInterface {
            public function getFullAddress();
        }
        
        class Person
        {
            private $address;
        
            //TypeHint (préciser le type d'objet attendu)
            //Ca va demander à PHP de vérifier qu'on lui passe bien une adresse.
            // INJECTION DE DÉPENDANCE.
            public function __construct(AddressInterface $address){
        
                //ATTENTION ATTENTION C'EST PAS GENTIL
                //DEPENDANCE CACHÉE A L'INTERIEUR DE LA CLASSE.
                $this->address = $adress; // bug manque COUNTRY
            }
        }
        
        class PersonFactory
        {
            public function createPerson($number, $street, $zipcode, $city, $country){
                $address = new BasicAddress($number, $street, $zipcode, $city, $country);
                return new Person($address); 
            }
        
            private function getZipcodeFromDistrict($district) {
                return 75000 + $district; // genere un code postal qui demare à partir 75000 
            }
        
            public function createParigot($number, $street, $district)    {
        
                return $this->createPerson($number, $street, $this->getZipcodeFromDistrict($district), 'Paris', 'France');
            }
        }
        
        $myfactory = new PersonFactory(); 
        $person = $myFactory->createParigot("10", "rue de la roquette", "75000");
        
        //Une usine ou Factory est un design pattern pour simplifier la création des objets
        //d'UNE classe.
        
        $dbh = DbhFactory::getMysQLDriver();
        $dbh = DbhFactory::getPostGreDriver();
        
        
        class DependencyInjectionContainer
        {
            $pokemonInstance; // stock les pokemons créer.
            
            public function getPersonFactory()
            {
                return new PersonFactory();
            }
        
            public function getPokemonFactory() { .... }
            public fuction getORM() {.....}
        }
        
        
        $container = new DependencyInjectionContainer();
        
        $container->getOrm()->executeQuery();
        $container->getPokemonFactory();
        $container->getPersonFactory();
        
        
        
        
        son($address); 
    }

    private function getZipcodeFromDistrict($district) {
        return 75000 + $district; // genere un code postal qui demare à partir 75000 
    }

    public function createParigot($number, $street, $district)    {

        return $this->createPerson($number, $street, $this->getZipcodeFromDistrict($district), 'Paris', 'France');
    }
}

$myfactory = new PersonFactory(); 
$person = $myFactory->createParigot("10", "rue de la roquette", "75000");

//Une usine ou Factory est un design pattern pour simplifier la création des objets
//d'UNE classe.

$dbh = DbhFactory::getMysQLDriver();
$dbh = DbhFactory::getPostGreDriver();


class DependencyInjectionContainer
{
    $pokemonInstance; // stock les pokemons créer.
    
    public function getPersonFactory()
    {
        return new PersonFactory();
    }

    public function getPokemonFactory() { .... }
    public fuction getORM() {.....}
}


$container = new DependencyInjectionContainer();

$container->getOrm()->executeQuery();
$container->getPokemonFactory();
$container->getPersonFactory();




