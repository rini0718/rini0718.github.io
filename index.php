<?php
include 'Orang.php';

// Membuat beberapa objek Orang
$orang1 = new Orang("John", 25);
$orang2 = new Orang("Jane", 30);
$orang3 = new Orang("Alice", 28);

// Menampilkan data orang-orang
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Orang</title>
</head>
<body>
    <h1>Daftar Orang</h1>
    <ul>
            <li>nama <?php echo $orang1->getnama(); ?>, <?php echo $orang1->getumur(); ?> tahun</li>
            <li>nama <?php echo $orang2->getnama(); ?>, <?php echo $orang2->getumur(); ?> tahun</li>
            <li>nama <?php echo $orang3->getnama(); ?>, <?php echo $orang3->getumur(); ?> tahun</li>
    </ul>
</body>
</html>
