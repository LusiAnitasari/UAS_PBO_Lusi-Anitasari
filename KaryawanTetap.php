<?php
// KaryawanTetap.php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    // Properti khusus Karyawan Tetap
    private $tunjanganKesehatan;
    private $opsiSahamId;

    // Constructor khusus Tetap
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    // Perhitungan Gaji khusus Tetap (Harian + Tunjangan)
    public function hitungGajiBersih() {
        return ($this->gajiDasarPerHari * $this->hariKerjaMasuk) + $this->tunjanganKesehatan;
    }

    // Tampilan profil khusus Tetap
    public function tampilanProfilKaryawan() {
        return "ID: " . $this->id_karyawan . " | Nama: " . $this->nama_karyawan . " | Status: Tetap | Opsi Saham ID: " . $this->opsiSahamId . " | Tunjangan: Rp" . number_format($this->tunjanganKesehatan, 0, ',', '.');
    }
}
?>