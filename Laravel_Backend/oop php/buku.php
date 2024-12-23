<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku</title>
</head>
<body>
    <h2>Class Buku</h2>
    <?php

class KaryaTulis {
    public $namaKarya;
    public $pengarang;

    public function __construct($namaKarya, $pengarang) {
        $this->namaKarya = $namaKarya;
        $this->pengarang = $pengarang;
    }

    public function tampilkanInfo() {
        return "Nama Karya: " . $this->namaKarya . ", Pengarang: " . $this->pengarang;
    }
}

class KaryaTulisDigital extends KaryaTulis {
    public $ukuran;

    public function __construct($namaKarya, $pengarang, $ukuran) {
        parent::__construct($namaKarya, $pengarang);
        $this->ukuran = $ukuran;
    }

    public function tampilkanInfo() {
        return parent::tampilkanInfo() . ", Besar Berkas: " . $this->ukuran;
    }
}

$karya1 = new KaryaTulis("Laskar Pelangi", "Andrea Hirata");
echo $karya1->tampilkanInfo() . "<br>";

$karyaDigital1 = new KaryaTulisDigital("Harry Potter dan Batu Bertuah", "J.K. Rowling", "5 MB");
echo $karyaDigital1->tampilkanInfo() . "<br>";

$karya2 = new KaryaTulis("Bumi", "Tere Liye");
echo $karya2->tampilkanInfo();

?>
</body>
</html>