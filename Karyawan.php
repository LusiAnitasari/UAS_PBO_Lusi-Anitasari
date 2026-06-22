<?php
// Karyawan.php

abstract class Karyawan {
    // Properti/Atribut Terenkapsulasi (protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hariKerjaMasuk;
    protected $gajiDasarPerHari;

    // Constructor untuk menetapkan nilai properti global dari database
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari) {
        $this->id_karyawan      = $id_karyawan;
        $this->nama_karyawan    = $nama_karyawan;
        $this->departemen       = $departemen;
        $this->hariKerjaMasuk   = $hariKerjaMasuk;
        $this->gajiDasarPerHari = $gajiDasarPerHari;
    }

    // Metode Abstrak (Tanpa Isi/Body)
    abstract public function hitungGajiBersih();
    abstract public function tampilanProfilKaryawan();
}
?>