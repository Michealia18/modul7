<?php
function luasSegi3($alas,$tinggii){
    return 0.5 * $alas * $tinggii;
}
function kelilingSegi3($alas,$tinggii){
    $sisiMiring = sqrt(pow($alas, 2) + pow($tinggii, 2));
    return $alas + $tinggii + $sisiMiring;
}
function format2desimal ($angka){
    return number_format((float)$angka, 2, '.', '');
    }
    $alas = 4.5;
    $tinggi = 6.0;
    echo '<p>Alas: ' . $alas . '</p>';
    echo '<p>Tinggi: ' . $tinggi . '</p>';    
    echo '<p>Luas: ' . format2desimal(luasSegi3($alas,$tinggi)) . '</p>';
    echo '<p>Keliling: ' . format2desimal(kelilingSegi3($alas,$tinggi)) . '</p>';
    

?>