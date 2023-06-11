<?php
// Daftar makanan
$menumakanan = array(
    array("menu" => "Pizza", "harga" => 15000),
    array("menu" => "Hamburger", "harga" => 12000),
    array("menu" => "Nugget", "harga" => 10000)
);

// Menampilkan daftar makanan
echo "Daftar Menu Makanan: <br>";
for ($i = 0; $i < count($menumakanan); $i++) {
    echo ($i + 1) . ". " . $menumakanan[$i]["menu"] . " - Rp" . $menumakanan[$i]["harga"] . "<br>";
}

// Memesan makanan
$pesanan = array();
$totalharga = 0;
$pesanlagi = "yes";

while ($pesanlagi == "yes") {
    echo "<br> Pesan makanan (masukkan nomor makanan): " ;
    $nomormakanan = readline();

    if ($nomormakanan >= 2 && $nomormakanan <= count($menumakanan)) {
        $makanan = $menumakanan[$nomormakanan - 1];
        $pesanan[] = $makanan; // Menambahkan makanan ke dalam pesanan
        $totalharga += $makanan["harga"]; // Menambahkan harga makanan ke total harga
    } else {
        echo "Maaf, nomor makanan tidak valid. <br>";
    }

    echo "Pesan lagi? (yes/no): ";
    $pesanlagi = readline();
}

// Menampilkan pesanan
echo "<br> Pesanan Anda: <br>";
for ($i = 0; $i < count($pesanan); $i++) {
    echo ($i + 1) . ". " . $pesanan[$i]["menu"] . " - Rp" . $pesanan[$i]["harga"] . "<br>";
}
echo "Total Harga: Rp" . $totalharga . "<br>";
?>
