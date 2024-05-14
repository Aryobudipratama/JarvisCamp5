<?php 
    function tampilkanGanjil($awal, $akhir) {
        for ($i = $awal; $i <= $akhir; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
    }
    
    
    function tampilkanGenap($awal, $akhir) {
        for ($i = $awal; $i <= $akhir; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }

    function hitungAritmatika($angka1, $angka2, $operator) {
        switch ($operator) {
            case 'tambah':
                return $angka1 + $angka2;
            case 'kurang':
                return $angka1 - $angka2;
            case 'kali':
                return $angka1 * $angka2;
            case 'bagi':
                if ($angka2 != 0) {
                    return $angka1 / $angka2;
                } else {
                    return "Tidak dapat membagi dengan nol";
                }
            default:
                return "Operator tidak valid";
        }
    }
    


    // Memanggil fungsi untuk menampilkan angka ganjil antara 1 dan 10
    echo "Angka Ganjil antara 1 dan 10: ";
    tampilkanGanjil(1, 10);
    echo "<br>";

    // Memanggil fungsi untuk menampilkan angka genap antara 1 dan 10
    echo "Angka Genap antara 1 dan 10: ";
    tampilkanGenap(1, 10);
    echo "<br>";

    // Menggunakan fungsi aritmatika
    $angka1 = 10;
    $angka2 = 5;

    echo "Hasil Tambah dari 10 + 5 : " . hitungAritmatika($angka1, $angka2, 'tambah') . "<br>";
    echo "Hasil Kurang dari 10 - 5 : " . hitungAritmatika($angka1, $angka2, 'kurang') . "<br>";
    echo "Hasil Kali dari 10 X 5 : " . hitungAritmatika($angka1, $angka2, 'kali') . "<br>";
    echo "Hasil Bagi dari 10 / 5 : " . hitungAritmatika($angka1, $angka2, 'bagi') . "<br>";
?>