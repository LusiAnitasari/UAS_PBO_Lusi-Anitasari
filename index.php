<?php
// index.php
require_once 'koneksi.php';
require_once 'Karyawan.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanMagang.php';

// Ambil semua data karyawan dari database
$sql = "SELECT * FROM tabel_karyawan";
$result = $conn->query($sql);

// Siapkan array untuk mengelompokkan objek karyawan
$daftarKontrak = [];
$daftarTetap   = [];
$daftarMagang  = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Polimorfisme & Inisialisasi Objek berdasarkan Jenis Karyawan
        if ($row['jenis_karyawan'] == 'kontrak') {
            $daftarKontrak[] = new KaryawanKontrak(
                $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                $row['durasi_kontrak_bulanan'], $row['agensi_penyalur']
            );
        } elseif ($row['jenis_karyawan'] == 'tetap') {
            $daftarTetap[] = new KaryawanTetap(
                $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                $row['tunjangan_kesehatan'], $row['opsi_saham_id']
            );
        } elseif ($row['jenis_karyawan'] == 'magang') {
            $daftarMagang[] = new KaryawanMagang(
                $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                $row['uang_saku_bulanan'], $row['sertifikat_kampus_merdeka']
            );
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Slip Gaji Karyawan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
        h1 { text-align: center; color: #333; }
        h2 { color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; margin-top: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #2c3e50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .profil { font-size: 0.9em; color: #555; font-style: italic; }
        .gaji { font-weight: bold; color: #27ae60; }
    </style>
</head>
<body>

    <h1>SISTEM INFORMASI DATA GAJI KARYAWAN</h1>

    <h2>Daftar Karyawan Kontrak</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Hari Masuk</th>
                <th>Informasi Spesifik Jabatan</th>
                <th>Total Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarKontrak as $k): ?>
            <tr>
                <td><?= $k->tampilanProfilKaryawan(); // Mengambil ID dari string profil atau buat getter ?></td>
                <td><?= $k->tampilanProfilKaryawan(); // Menggunakan fungsi bawaan tugas ?></td>
                <td>PBO - Kontrak</td>
                <td>Dinamis</td>
                <td class="profil"><?= $k->tampilanProfilKaryawan(); ?></td>
                <td class="gaji">Rp <?= number_format($k->hitungGajiBersih(), 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Daftar Karyawan Tetap</h2>
    <table>
        <thead>
            <tr>
                <th>Profil Lengkap & Spesifikasi Jabatan</th>
                <th>Total Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarTetap as $t): ?>
            <tr>
                <td class="profil"><?= $t->tampilanProfilKaryawan(); ?></td>
                <td class="gaji">Rp <?= number_format($t->hitungGajiBersih(), 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Daftar Karyawan Magang</h2>
    <table>
        <thead>
            <tr>
                <th>Profil Lengkap & Spesifikasi Jabatan</th>
                <th>Total Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftarMagang as $m): ?>
            <tr>
                <td class="profil"><?= $m->tampilanProfilKaryawan(); ?></td>
                <td class="gaji">Rp <?= number_format($m->hitungGajiBersih(), 0, ',', '.'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>