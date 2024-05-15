<?php 
    $array = [1,2,3,4,5];

    echo $array[1];
    echo "<br><pre>";
    echo "</pre>";

    //array associative
    $umur = ["Wafi" => 23, "Aryo" => 14];
    $umur["Mamat"] = 20;
    $umur['Mumun'] = 21;
    echo "<br><pre>";
    print_r($umur);
    echo "</pre>";

    foreach ( $umur as $nama => $umur) {//variabel $nama dan $umur itu bebas mau di namain apa 
        echo "Namanya : $nama <br> Umurnya : $umur <br> ";
    }

    // array multidimensi
    $buahBuahan = [
        ["nama" => "Apel", "warna" => "merah"],
        ["nama" => "Mangga", "warna" => "Hijau"],
        ["nama" => "Pisang", "warna" => "Kuning"],
        ["nama" => "Durian", "warna" => "kuning"],
        ["nama" => "Kesemek", "warna" => "Jingga"],
    ];

    echo "<br><pre>";
    //print_r($buahBuahan);
    echo "</pre>";
?>

<table border="2">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahBuahan as $buah) { ?>
        <tr>
            <td><?php echo $buah['nama'] ?></td>
            <td><?php echo $buah['warna'] ?></td> 
            
        </tr>
    <?php } ?>
</table>