<?php
$str = 'one|two|three|four';
print_r(explode('|',$str));
// Hanya 2 elemen array
print_r(explode('|', $str, 2));
// Hasilnya : Array ( [0] => one [1] => two [2] => three [3] => four) Array ( [0] => one [1] => two|three|four)
?>
