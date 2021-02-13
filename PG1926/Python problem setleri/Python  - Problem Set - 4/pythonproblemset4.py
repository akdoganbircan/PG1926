enBüyükSayı=0
stringList = input("Bir liste giriniz:")
stringList = stringList.strip("]")
stringList = stringList.strip("[")
List = stringList.split(",")
#print(stringList)
#print(List)

print(List)
for number in List:
    number=int(number)
    if number%2==1 and number > enBüyükSayı :
        enBüyükSayı = number

    
if enBüyükSayı == "0" :
    print("Listenizde tek sayı yoktur.")
else :
    print("[{}]".format(enBüyükSayı))
    
    