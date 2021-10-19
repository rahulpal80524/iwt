<?php
// Your code here
$n = (int)readline('Enter an integer: ');
$larger = 0;

while ($n > 0) {
    $rem = $n%10;
    if ( $larger < $rem) {
        $larger = $rem;
    }
    $n = $n / 10;
}

echo "larger number ". $larger;
?>