<?php

class Orang {
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getnama() {
        return $this->nama;
    }

    public function getumur() {
        return $this->umur;
    }
}
?>
