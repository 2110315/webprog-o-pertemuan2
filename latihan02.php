<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="judul page"?></title>
</head>
<body>
    
<?php
    echo "<h3>Belajar PHP</h3>";
    echo "<ul>";
    echo "<li>Membuat script sederhana</li>";
    echo "<li>Menyisipkan Script PHP pada Dokumen HTML</li>";
    echo "<li>Menyisipkan external script PHP pada Dokumen HTML</li>";
    echo "<ul>";

    include("latihan01.php");
    require("latihan01.php");
?>
    
</body>
</html>
