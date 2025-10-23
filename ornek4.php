<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$meyveler = ["karpuz", "Armut", "Muz", "Çilek"];
echo "İlk meyve: " . $meyveler[0] . "<br>";
echo "Üçüncü meyve: " . $meyveler[2] . "<br>";
$meyveler[] = "Karpuz";
$kisi = [
"ad" => "Emirhan",
"soyad" => "Yılmaz",
"yas" => 30,
"meslek" => "Mühendis"
];
echo $kisi["ad"] . " " . $kisi["soyad"] . ", " . $kisi["yas"] . " yaşında bir " . $kisi["meslek"] . "tir.";
echo "<hr>";
echo "<h3>Meyve Listesi (Foreach)</h3>";
echo "<ul>";
foreach ($meyveler as $meyve) {
echo "<li>$meyve</li>";
}
echo "</ul>";
echo "<h3>Kişi Bilgileri (Foreach)</h3>";
foreach ($kisi as $anahtar => $deger) {
echo "$anahtar : $deger <br>";
}
?>
</body>
</html>