<?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    echo $ar_buah[1];
    // menmapilkan jumlah buah
    echo "<br/>Jumlah Buah " . count($ar_buah);
    //menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>" . $buah . "</li>";
    } 
    echo "</ol>";

    // menambahkan buah 
    $ar_buah[] = "Durian";
    
    // menghapus buah index ke 1
    unset($ar_buah[1]);

    // mengubah index ke 2 menjadi manggis
    $ar_buah[2] = "Manggis";

    // menampilkan seluruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " .$buah ." adalah " .$v . "</li>";
    }
    echo "</ul>";

    echo "<ul>";
    sort($ar_buah);
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - " .$buah ." adalah " .$v . "</li>";
    }
    echo "</ul>";
?>