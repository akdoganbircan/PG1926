<?php
/*
· 06:00 – 10:00 Günaydın
· 10:00 – 17:00 İyi günler
· 17:00 – 20:00 İyi akşamlar
· 20:00 – 00:00 İyi geceler
· 00:00 – 06:00 Esenlikler dilerim


22 saat = 79200
06:00 = 21 600 - 7200 = 14 400
10:00 = 36 000 - 7200 = 28 800
17:00 = 61 200 - 7200 = 54 000
20:00 = 72 000 - 7200 = 64 800
24:00 = 86 400 - 7200 = 79 200
*/

$suan = strtotime("now");
$bugun = strtotime("today");
//echo $suan . "<br>";
//echo $bugun . "<br>";
$gecenzaman = $suan - $bugun;
//echo $gecenzaman . "<br>";

if ($gecenzaman < 14400 OR $gecenzaman > 79200) {
    echo "Esenlikler dilerim.";
}
else if ($gecenzaman < 28800) {
    echo "Günaydın.";
}
else if ($gecenzaman < 54000) {
    echo "İyi günler.";
}
else if ($gecenzaman < 64800) {
    echo "İyi akşamlar.";
}
else {
    echo "İyi geceler.";
}


?>