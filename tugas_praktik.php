<?php
// Tugas praktik: ringkasan seluruh konsep pewarisan
// (Parent Class, Child Class, extends, constructor, overriding)

class Pengguna {

    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Pengguna Umum<br>";
    }

}

class Mahasiswa extends Pengguna {

    private $nim;
    private $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Mahasiswa<br>";
    }

}

class Dosen extends Pengguna {

    private $nidn;
    private $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Dosen<br>";
    }

}

class Administrasi extends Pengguna {

    private $idPegawai;
    private $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi<br>";
    }

}

$daftar = [
    new Mahasiswa("Andi", "andi@email.com", "2301001", "Sistem Informasi"),
    new Dosen("Budi", "budi@email.com", "0011223344", "Pemrograman Web"),
    new Administrasi("Citra", "citra@email.com", "P-1001", "Akademik"),
];

foreach ($daftar as $i => $pengguna) {
    echo "<h3>Pengguna " . ($i + 1) . "</h3>";
    $pengguna->tampilkanData();
    $pengguna->tampilkanPeran();
    echo "<hr>";
}

?>
