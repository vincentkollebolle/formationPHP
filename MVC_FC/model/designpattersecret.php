<?php
      interface Observable {
        //0 ou n methodes à implementer
        public function emitEvent();
        public function subscribe(AbonnableInteface $abo);
        public function unSubscribe(AbonnableInteface $abo);
    }

    interface Observer {
        public function onEvent() {}
    }


    class Journal implements Observable {

        private $subscribers;

        public function emitEvent() {
            //interpeler les methode de l'ensemble des abonnees.
            foreach($this->abonnees as $abo) {
                $abo->emitEvent();
            }
        }

        public function subscribe(AbonnableInteface $abo) {
            $this->abonnees[] = $abo;
        }

        public function unSubscribe(AbonnableInteface $abo) {
            //... supprimer $abo du tableau $$abonnee
        }

    }


    class Newsletter implements Observable {

    }
    
    class Abonnee implements Observer {

        public function onEvent() {
            echo "youpiiiiiiii";
        }

    }

    class Pokemon implements Observer {
        public function onEvent() {
            echo "pikaaaaaaaaaaaaaa";
        }
    }

    class Tigre implements Observer {
        public function onEvent() {
            echo "graouuuuu";
        }
    }
   


    $unJournal = new Journal();
    $nour = new Abonnee();
    $christophe = new Abonnee();
    $vincent = new Abonnee();
    $pikachu = new Pokemon(); 
    $tigre = new Tigre(); 
    $unJournal->subscribe($nour);
    $unJournal->subscribe($christophe);
    $unJournal->subscribe($vincent);
    $unJournal->subscribe($pokemon);
    $unJournal->subscribe($tigre);
    $unJournal->nouveauNumero();
    $unJournal->unSubscribe($nour); 
    // ça devrait appeler la methode onNouveauNumero de l'objet $nour. 
    //nour dit youpiiiii
    //chris dit youpiiii
    //vincent dit youpiiii
    //pikachu dit pikaaaaaaaaaaaaaa
    //tigre dit graouuuuuuuuuuuuu
    $unJournal->nouveauNumero();
    $uneNewsletter = new Newsletter();
    $uneNewsletter->subscribe($tigre);
    $uneNewsletter->subscribe($vincent);
    

    //ceux qui sont déjà capable de s'abonner à un journal devrait pouvoir 
    //s'abonner aussi à une newsletter.

    
?>