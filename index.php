<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniqlo</title>
    <style>
        p{
            font-size: 30px;
            width: 500px;

        }
        body {
            background-color: khaki;
        }
    </style>

</head>
<body>

    <?php 
    $baju = 17;
    $bawa = 50;
    $hasil = $bawa;
    $harga = 0;
    $kira = 0;
    while($hasil >= $baju) {
        $hasil = $hasil - $baju;
        $kira = $kira + 1;
        $harga = $harga + $baju;
    }
?>

<p>
    Saya membawa RM<?php echo $bawa; ?> Baju sehelai berharga RM<?php echo $baju; ?>
    Saya dapat membeli <?php echo $kira ; ?> helai baju dengan jumlah RM<?php echo $harga; ?>
    berbaki RM <?php echo $hasil; ?>
</p>
</body>
</html>