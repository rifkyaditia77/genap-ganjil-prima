<?php

//n = (n + 1) * (n - 1)
// bilangan yang dibagi 1 dan bilangan itu 
$n = 1;
$jumlah_bilangan_genap = 0;
$jumlah_bilangan_ganjil = 0;
$jumlah_bilangan_prima = 0;


for ($n; $n < 101; $n++) {
    $hasil = ($n + 1) * ($n - 1);
    // mencari bilangan genap
    if ($hasil % 2 == 0) {
        echo "bilangan genap = " . $hasil . "<br/>";
        $jumlah_bilangan_genap += count($hasil);
    } else {
        echo "bilangan ganjil = " . $hasil . "<br/>";
        $jumlah_bilangan_ganjil += count($hasil);
    }
    
    // mencari bilangan prima
    $prima = "Bilangan Prima gan || ";
    for($i = 2; $i <= $hasil; $i++) {
        if($hasil % $i == 0) {
            $prima = "Bukan Bilangan Prima Gan || ";
            break;
        } 
    }
    
    echo $prima;

}
"<br/>";
echo " Total Bilangan Genap = ".$jumlah_bilangan_ganjil;
echo " Total Bilangan Ganjil = ".$jumlah_bilangan_genap;
// echo " Total Bilangan Prima = ".$jumlah_bilangan_prima;
?>