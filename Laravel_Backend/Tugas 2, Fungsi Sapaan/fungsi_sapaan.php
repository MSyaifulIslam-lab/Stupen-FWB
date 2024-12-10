<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Fungsi Sapaan</title><b>
</head>
<body>
    <h2>Contoh Fungsi Sapaan</h2>
    <?php
    function sapaan($nama = "(Cewek lain)", $waktu = null) {
        if ($waktu == "pagi") {
            $pesan = "Good Morning, $nama! Have a good day!";
        } elseif ($waktu == "siang") {
            $pesan = "Good Afternoon, $nama! Keep it up!";
        } elseif ($waktu == "sore") {
            $pesan = "Good Evening, $nama! How wa your day?";
        } elseif ($waktu == "malam") {  
            $pesan = "Good Night, $nama! Have a good rest!";
        } else {
            // Ini untk kalo waktu tidak diisi
            $pesan = "Hello $nama! Did you wash your ass today?!";
        }
        // Utuk membalikan pesan sapaan
        return $pesan;
    }

    // Menampilkan hasil sapaan dengan garis pemisah antar sapaan
    echo "<p>" . sapaan("Ale", "pagi") . "</p>";
    echo "<p>" . sapaan("Ale", "siang") . "</p>";
    echo "<p>" . sapaan("Ale", "sore") . "</p>";
    echo "<p>" . sapaan("Ale", "malam") . "</p><hr>";
    echo "<p>" . sapaan("Boss") . "</p><hr>";
    ?>
</body>
</html>
