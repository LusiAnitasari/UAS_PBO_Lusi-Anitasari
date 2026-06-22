<?php
// KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti khusus Karyawan Magang
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    // Constructor khusus Magang
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // Perhitungan Gaji khusus Magang (Harian + Uang Saku Bulanan)
    public function hitungGajiBersih() {
        return ($this->gajiDasarPerHari * $this->hariKerjaMasuk) + $this->uangSakuBulanan;
    }

    // Tampilan profil khusus Magang
    public function tampilanProfilKaryawan() {
        return "ID: " . $this->id_karyawan . " | Nama: " . $this->nama_karyawan . " | Status: Magang | Program: " . $this->sertifikatKampusMerdeka . " | Uang Saku: Rp" . number_format($this->uangSakuBulanan, 0, ',', '.');
    }

    // Overriding method dari parent class Karyawan
    public function hitungGajiBersih() {
        // Logika Bisnis Magang: Gaji harian + Uang Saku Bulanan
        $gajiHarian = $this->gajiDasarPerHari * $this->hariKerjaMasuk;
        $gajiTotal = $gajiHarian + $this->uangSakuBulanan;
        return $gajiTotal;
    }
}
?>