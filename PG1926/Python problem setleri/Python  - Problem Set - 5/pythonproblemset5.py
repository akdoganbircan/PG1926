class Okul:
    okullar = []
    
    def __init__(self,kodu,adı,lokasyonu):
        self.kodu = kodu
        self.adı = adı
        self.lokasyonu = lokasyonu
        self.okul_ekle()
        self.personelleri = []
           
        
    def okul_ekle(self):
        self.okullar.append(self.adı)
        print("Okul eklenmiştir")
        
    def okulu_goruntule(self):
        print(self.kodu," ",self.adı," ",self.lokasyonu)
        
    def okulları_goruntule(self):
        print("Okul listesi: ")
        for okul in self.okullar:
            print(okul)
            
    def personel_ekle(self, personel):
        self.personelleri.append(personel)
        print("Personel eklenmiştir")        

    def personelleri_goruntule(self):
        print('{} adlı okulun personelleri:'.format(self.adı))
        for personel in self.personelleri:
            print(personel)
        
        
        
        

okul1 = Okul(1,"ilkOkul","ilkMekan")  
okul2 = Okul(2,"ikinciOkul","ikinciMekan")  
okul3 = Okul(3,"ucuncuOkul","ucuncuMekan") 

print("***")

okul1.okulları_goruntule()

print("***")


okul1.okulu_goruntule() 

print("***")

okul1.personelleri.append("Ahmet")
okul1.personel_ekle("Mehmet")
okul2.personelleri.append("Ayşe")

print("***")


okul1.personelleri_goruntule()

