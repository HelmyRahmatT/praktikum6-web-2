<?php

class Pengguna {

    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

}

class Mahasiswa extends Pengguna {

    public $nim;
    public $prodi;

    public function __construct(
        $nama,
        $email,
        $nim,
        $prodi
    ) {
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        $this->tampilkanData();

        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

}

$mhs1 = new Mahasiswa(
    "Andi",
    "andi@email.com",
    "2301001",
    "Sistem Informasi"
);

// Tugas pengembangan: object kedua dengan data berbeda
$mhs2 = new Mahasiswa(
    "Siti",
    "siti@email.com",
    "2301002",
    "Teknik Informatika"
);

echo "<h3>Mahasiswa 1</h3>";
$mhs1->tampilkanDataMahasiswa();

echo "<h3>Mahasiswa 2</h3>";
$mhs2->tampilkanDataMahasiswa();

?>
