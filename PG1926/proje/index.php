<html>

<head>
  <title>Çekiliş</title>  
</head>

<body>

<h2>Çekiliş Uygulamanız</h2>
Seçenekler
<br>
<input placeholder='Seçenekleri giriniz' id='choiceInput'/> 
<br>
Kazanan Sayısı
<br>
<input placeholder='Kazanan sayısı giriniz' id='numberInput'/> 
<br>
<button onclick="myFunction()">Çek</button>
<br>

<script>
function myFunction() {

    var secenek = document.getElementById("choiceInput").value;
    var sayi = document.getElementById("numberInput").value;

    sayi = (int)(sayi);
    if (secenek==""||sayi=="") {
        document.getElementById("sonuc").innerHTML = "<br>" + "Lütfen alanları doldurunuz...";
    }
    else {
        var $secenekler  =  split('.,-', $secenek);
        var $rand_secenekler = array_rand($secenekler, $sayi);
        document.getElementById("sonuc").innerHTML = "<br>" + "Kazananlar ";
    }
}
</script>

<div id=sonuc>
<br>
Sonucu görmek için alanları doldurunuz

</div>
</body>

</html>

