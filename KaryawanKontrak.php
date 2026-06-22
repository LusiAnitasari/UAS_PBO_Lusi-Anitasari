<?php
// KaryawanKontrak.php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    // Properti khusus Karyawan Kontrak
    private $durasiKontrakBulanan;
    private $agensiPenyalur;

    // Constructor khusus Kontrak
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulanan, $agensiPenyalur) {
        // Mengirim data global ke parent class (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->durasiKontrakBulanan = $durasiKontrakBulanan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    // Perhitungan Gaji khusus Kontrak (Murni harian)
    public function hitungGajiBersih() {
        return $this->gajiDasarPerHari * $this->hariKerjaMasuk;
    }

    // Tampilan profil khusus Kontrak
    public function tampilanProfilKaryawan() {
        return "ID: " . $this->id_karyawan . " | Nama: " . $this->nama_karyawan . " | Status: Kontrak | Agensi: " . $this->agensiPenyalur . " | Durasi: " . $this->durasiKontrakBulanan . " Bulan";
    }

    // Overriding method dari parent class Karyawan
    public function hitungGajiBersih() {
        // Logika Bisnis Kontrak: Murni dari kehadiran
        $gajiMurni = $this->gajiDasarPerHari * $this->hariKerjaMasuk;
        return $gajiMurni;
    }
}
?>