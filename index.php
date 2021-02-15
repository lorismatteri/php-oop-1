<?php
    /* Istruzioni:
    Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
    */
    
    
    /** Moto Class 
     * @author me me@gmail.com
     * @copyright 2021 me
    */

    class Moto {
        public $marca;
        public $model;
        public $cilindrata;
        public $potenza;
        public $color;
        public $prezzo;

        public function __construct(string $marca, string $model, int $cilindrata, int $potenza, string $color, float $prezzo){
            $this->marca = $marca;
            $this->model = $model;
            $this->cilindrata = $cilindrata;
            $this->potenza = $potenza;
            $this->color = $color;
            $this->prezzo = $prezzo;
        }

        public function getModel(){
            return $this->model;
        }

        public function setPrezzo(float $prezzo){
            $this->prezzo = $prezzo;
        }
    }

    $honda = new Moto('Honda', 'CB1000R', 998, 145, 'black', 13390.00);
    $yamaha = new Moto('Yamaha', 'MT-07', 689, 74, 'blue', 6999.00);
    $kawasaki = new Moto('Kawasaki', 'z900', 948, 125, 'white-green', 9790.00);
    $suzuki = new Moto('Suzuki', 'GSX-S750', 749, 115, 'blue', 7990.00);
    $mv = new Moto('Mv Agusta', 'Superveloce 800', 798, 148, 'black', 20000.00);


    var_dump($honda, $yamaha, $kawasaki, $suzuki, $mv);

    $modello = $mv->getModel();

    var_dump($modello);

    $suzuki->setPrezzo(8690.00);

    var_dump($suzuki);
?>