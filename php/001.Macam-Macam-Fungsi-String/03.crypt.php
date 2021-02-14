<?php
///--- menggunakan salt kita sendiri
$password = 'haripinter';
$salt = 'rahasia';

$var = crypt($password,$salt);
$vir = crypt($password,$var);
if($var == $vir){
        echo "Password cocok!<br />";
}
#echo "$var<br />";
#echo "$vir<br />";

echo "<br/>";
///--- menggunakan salt yang digenerate otomatis
$var = crypt($password);
$vir = crypt($password,$var);
if($var == $vir){
        echo "Password cocok!<br />";
}

#echo "$var<br />";
#echo "$vir<br />";
# jika bagian komen di aktifkan akan memperlihatkan crypt tersebut
# biasanya ini digunakan untuk password 
?>
