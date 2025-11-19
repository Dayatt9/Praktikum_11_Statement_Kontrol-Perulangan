<?php
$jumlah_penyelesaian = 0;
 juga tidak masalah.
for ($x = 1; $x < 25; $x++) {

    for ($y = 1; $y < 25; $y++) {

        for ($z = 1; $z < 25; $z++) {

            if (($x + $y + $z) == 25) {
                echo "x = $x, y = $y, z = $z <br>";
                
                $jumlah_penyelesaian++;
            }
        }
    }
}

echo "<br>";
echo "Jumlah penyelesaian : " . $jumlah_penyelesaian;
?>