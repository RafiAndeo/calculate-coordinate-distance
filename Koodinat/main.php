<html>

<head>
    <meta charset="UTF-8">
    <title>main</title>
</head>

<body>
    <?php
    include "koordinat.php";
    include "koordinat3d.php";
    include "koordinatWarna.php";
    $A = new koordinat(15, 12);
    $B = new koordinat3d(10, 28, 30);
    $hasil_1 = $A->hitungJarak($B);
    echo "Jarak antara koordinat B dan koordinat A adalah " . $hasil_1 . "<br>";
    $C = new koordinatWarna(11, 26, 32);
    $hasil_2 = $C->hitungJarak($B);
    echo "Jarak antara koordinat B dan koordinat C adalah " . $hasil_2 . "<br>";
    $D = new koordinatWarna(35, 60, "Hitam");
    $E = new koordinatWarna(25, 50, "Putih");
    $hasil_3 = $D->hitungJarak($B);
    echo "Jarak antara koordinat B dan koordinat D adalah " . $hasil_3 . " dengan warna Hitam " . "<br>";
    $hasil_4 = $E->hitungJarak($D);
    echo "Jarak antara koordinat D dan koordinat E adalah " . $hasil_4 . " dengan warna Putih " . "<br>";
    ?>
</body>

</html>