<html>

<head>
  <title>Asal Sayılar</title>  
</head>

<body>

<h2>Asal Sayı Kontrolü</h2>
<input placeholder='Aramak istediğiniz sayı' id='numberInput'/>
<button onclick="myFunction()">Kontrol</button>

<script>
function myFunction() {
  var a = document.getElementById("numberInput").value;
    if (a=="") {
      alert("Lütfen bir sayı giriniz");
    }
    else {
      a = parseInt(a);
      var b = a ;
      var c = 0;

      while(b>1){
        if(a%b==0){ c= c+b;}
        b=b-1;
      }
    
      if(c==a && c!=0){
        alert("Asal bir sayı girdiniz.");
      }
      else{
        alert("Bu sayı asal değildir.");
        
      }

}
}
</script>

</body>

</html>

