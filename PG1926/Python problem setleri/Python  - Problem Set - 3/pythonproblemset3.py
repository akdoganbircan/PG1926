List = []
myList = []

while True:
    yeniSayı = input("Lütfen bir sayı giriniz(Sayı girimini sonlandırmak için x giriniz): ")
    if yeniSayı == "x" : break
    else : List.append(yeniSayı)
   
counter = 0
counter = List.count("0")


for number in List:
    if number == "0" : pass
    else : myList.append(number)
    

myList.reverse()

while counter>0:
    myList.append("0")
    counter-=1
    
myList.reverse()
print(List)
print(myList)
