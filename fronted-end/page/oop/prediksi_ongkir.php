<?php

    class Prediksi {
        public $berat;
        public $biaya_perkilo;

        function __construct($b1, $b2) {
            $this->berat = $b1;
            $this->biaya_perkilo = $b2; 
        }

        function getOngkir(){
            $biaya_ongkir = $this->berat * $this->biaya_perkilo;
            return $biaya_ongkir;
        }
    }

    $ongkir1 = new Prediksi(2, 9000);
    echo '<br>Hasil Perdiksi Ongkir Dengan Berat 2kg dan Biaya Perkilo 9000 adalah = Rp.' . $ongkir1->getOngkir();
?>