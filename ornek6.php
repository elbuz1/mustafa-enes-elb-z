<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$mesaj = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ad = htmlspecialchars($_POST["kullanici_adi"]);
if (empty($ad)) {
$mesaj = "<p style='color: red;'>Lütfen adınızı giriniz.</p>";
} else {
$mesaj = "<p style='color: green;'>Hoş geldin, $ad!</p>";
}
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>PHP Form Örneği</title>
</head>
<body>
<?php
echo $mesaj;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="ad">Adınız:</label>
<input type="text" id="ad" name="kullanici_adi">
<input type="submit" value="Gönder">
</form>
<hr>
<?php
if (isset($_GET["urun"])) { 
$urun_adi = htmlspecialchars($_GET["urun"]);
echo "<p>Şu anda '$urun_adi' adlı ürünü inceliyorsunuz.</p>";
}
?>
</body>
</html>
</body>
</html>