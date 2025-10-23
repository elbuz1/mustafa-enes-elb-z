<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function selamVer() {
echo "Merhaba! <br>";
}
selamVer();
function selamIsimle($isim) {
echo "Merhaba, $isim! <br>";
}
selamIsimle("Ayşe");
selamIsimle("Mehmet");
function topla($sayi1, $sayi2) {
$sonuc = $sayi1 + $sayi2;
return $sonuc;
}
$toplam = topla(10, 15);
echo "10 + 15 = $toplam";
?>
</body>
</html>