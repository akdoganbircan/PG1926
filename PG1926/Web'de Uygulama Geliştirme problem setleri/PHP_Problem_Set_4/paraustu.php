<html>

<head>
  <title>Para Üstü</title>  
</head>

<body>

<h2>Para Üstü Kontrolü</h2>
<input placeholder='Miktar giriniz' id='liraInput'/> 
Lira
<input placeholder='Miktar giriniz' id='kurusInput'/> 
Kuruş
<button onclick="myFunction()">Kontrol</button>
<br>

<script>
function myFunction() {
    var birLira=0;
    var elliKurus=0;
    var yirmibesKurus=0;
    var onKurus=0;
    var besKurus=0;
    var birKurus=0;
  var lira = document.getElementById("liraInput").value;
  var kurus = document.getElementById("kurusInput").value;

    if (lira==""||kurus=="") {
        document.getElementById("sonuc").innerHTML = "<br>" + "Lütfen değerleri giriniz. (Kullanılmayacak olanlar için 0 kullanınız.)";
      
    }
    else {
        lira = parseInt(lira);
        kurus = parseInt(kurus);
        birLira = lira;
        while(kurus>=100){
            kurus=kurus-100;
            birLira=birLira+1;
        }

        if(kurus>=50){
            kurus=kurus-50;
            elliKurus=elliKurus+1;
        }

        
        if(kurus>=25){
            kurus=kurus-25;
            yirmibesKurus=yirmibesKurus+1;
        }

        while(kurus>=10){
            kurus=kurus-10;
            onKurus=onKurus+1;
        }

        if(kurus>=5){
            kurus=kurus-5;
            besKurus=besKurus+1;
        }

        while(kurus>=1){
            kurus=kurus-1;
            birKurus=birKurus+1;
        }

        var toplam = birLira + elliKurus + yirmibesKurus + onKurus + besKurus + birKurus;

        document.getElementById("sonuc").innerHTML = "<br>" + "Para miktarı: " + toplam + "<br> <br>" + birLira + " tane 1 lira" + "<br>" + elliKurus + " tane 50 kurus" + "<br>" + yirmibesKurus + " tane 25 kurus" + "<br>" + onKurus + " tane 10 kurus"+ "<br>" + besKurus + " tane 5 kurus" + "<br>" + birKurus + " tane 1 kurus";


    }
}
</script>

<div id=sonuc>
<br>
Para Miktarı:

</div>
</body>

</html>

