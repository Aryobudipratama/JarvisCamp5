<?php 
    $fruits = [1,2,3,4,5];
    //print_r($fruits);
    $fruits[0] = "Hijau";
    $fruits[2] = "Merah";
    print_r($fruits);

    echo "<br>";
    //menghitung total data di array
    echo count($fruits);
    echo "<br>";

    //menambah data di akhir array
    array_push($fruits, "mangga", "apple");
    print_r($fruits);
    echo "<br>";
    
    //cek data di array ada atau gak
    var_dump (in_array("Hijau", $fruits)) ;
    echo "<br>";

    //menghapus/mengambil elemen di akhir 
    $last = array_pop($fruits);
    print_r($fruits);
    echo "<br>" ;
    echo $last ;

    //menghaspus elemen 
    //unset($fruits);
    //print_r($fruits);
    //echo "<br>" ;

    
    echo $_SERVER['HTTP_HOST'] ;
?>