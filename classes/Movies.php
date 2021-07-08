<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class Movie {
        public $title;
        public $director;
        public $cast;
        public $genre;
        public $year;
        public $plot;
        public $rating;

        function __construct($title, $genre, $year = "Info non disponibile", $plot = "Trama non disponibile") {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->plot = $plot;
        }
        public function getRating() {
            if ($this->rating > 16) {
                return $this->rating = "Vietato ai minori di 16 anni";
            } else {
                return $this->rating = "Per tutte le età";
            }
        }
    }

    $theWolf = new Movie("The Wolf of Wall Street", "Biografico", "2013");
    $theWolf->director = "Martin Scorsese";
    $theWolf->cast = "Leonardo DiCaprio, Jonah Hill, Margot Robbie ...";
    $theWolf->plot = "New York, anni 80. Eccessi e corruzione segnano la curva discendente della brillante carriera di Jordan Belfort, un ambizioso broker in grado di guadagnare migliaia di dollari al minuto e di spenderne altrettanti in droga e futilità.";
    $theWolf->rating = 17;


    $apocalypto = new Movie("Apocalypto", "Avventura", "2006");
    $apocalypto->director = "Mel Gibson";
    $apocalypto->cast = "Rudy Youngblood, Dalia Hernandez, Jonathan Brewer ...";
    $apocalypto->plot ="All'avvicinarsi della fine della civiltà Maya, un uomo compie il disperato tentativo di sfuggire dal sacrificio umano e tornare dalla sua famiglia e dalla donna che ama.";
    $apocalypto->rating = 17;


    $mohicani = new Movie("L'ultimo dei Mohicani", "Azione", "1992");
    $mohicani->director = " Michael Mann";
    $mohicani->cast = "Daniel Day-Lewis, Madeleine Stowe, Russell Means ...";
    $mohicani->plot ="Gli ultimi membri una tribù di nativi americani, Uncas, il padre Chingachgook ed il fratello adottivo Occhio di falco, vivono in pace accanto ad un gruppo di colonizzatori britannici. In seguito al rapimento delle figlie di un colonnello inglese per mano di un esploratore, i due giovani sono costretti a prendere parte alla sanguinosa guerra fra i francesi e gli indiani.";
    $mohicani->rating = 10;