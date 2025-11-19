<!DOCTYPE html>
<html>
    <head>
        <title>Hitung Saldo</title>
    </head>
    <body>

        <h3>Soal: Hitung Saldo Akhir Nasabah</h3>

        <form method="post" action="">
            Masukkan Saldo Awal:<br>
            <input type="number" name="saldo_awal" required><br><br>
            
            Masukkan Jangka Waktu (Bulan):<br>
            <input type="number" name="bulan" required><br><br>
            
            <input type="submit" name="proses" value="Hitung Sekarang">
        </form>

        <br>
        <hr>

        <?php
        if (isset($_POST['proses'])) {
            $saldo = $_POST['saldo_awal'];
            $lama_bulan = $_POST['bulan'];
            $biaya_admin = 9000;

            echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "<br>";
            echo "Lama Tabungan: $lama_bulan bulan<br><br>";

            for ($i = 1; $i <= $lama_bulan; $i++) {
                
                if ($saldo < 1100000) {
                    $persen_bunga = 3;
                } else {
                    $persen_bunga = 4;
                }

                $nominal_bunga = ($saldo * ($persen_bunga / 100)) / 12;

                $saldo = $saldo + $nominal_bunga - $biaya_admin;
            }

            echo "<b>Hasil Perhitungan:</b><br>";
            echo "Saldo Akhir setelah $lama_bulan bulan adalah: <b>Rp " . number_format($saldo, 0, ',', '.') . "</b>";
        }
        ?>

    </body>
</html>