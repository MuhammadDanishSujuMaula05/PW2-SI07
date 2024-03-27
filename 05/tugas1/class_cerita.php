<?php
    class Kereta {
        protected $penumpanglaki;
        protected $penumpangperempuan;

        protected function __construct($penumpanglaki, $penumpangperempuan) {
            $this->A = $penumpanglaki;
            $this->B = $penumpangperempuan;
        }

        protected function getTiket() {
            echo "Dewasa : " . $this->A . "<br>";
            echo "Anak-Anak : " . $this->B . "<br>";
        }
    }

    class Gojek extends Kereta {
        public $penumpanglansia;

        public function __construct($penumpanglaki, $penumpangperempuan, $penumpanglansia) {
            parent::__construct($penumpanglaki, $penumpangperempuan);
            $this->C = $penumpanglansia;
        }

        public function getTiket() {
            parent::getTiket();
            echo "Lansia : " . $this->C . "<br>";
        }
    }

    class Angkot extends Kereta {
        public $penumpanganakkecil;

        public function __construct($penumpanglaki, $penumpangperempuan, $penumpanganakkecil) {
            parent::__construct($penumpanglaki, $penumpangperempuan);
            $this->D = $penumpanganakkecil;
        }

        public function getTiket() {
            parent::getTiket();
            echo "Hari libur : " . $this->D . "<br>";
        }
    }

?>