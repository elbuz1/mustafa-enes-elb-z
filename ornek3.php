<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>For Döngüsü (1-5 arası)</h3>";
echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
echo "<li>Sayı: $i</li>";
}
echo "</ul>";
echo "<h3>While Döngüsü</h3>";
$sayac = 1;
while ($sayac <= 3) {
echo "Sayaç değeri: $sayac <br>";
$sayac++;
}
?>
</body>
</html>