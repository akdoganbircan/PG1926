uzantıuzunluğu = int(input("Lütfen uzantı uzunluğu giriniz: "))
mail = input("Lütfen mail adresi giriniz: ")


TF = True

maillist = mail.split("@")

if len(maillist) == 2:
    print(TF)
    maillist[1] = maillist[1].split(".")
    if len(maillist[1]) > 3 : TF = False

    if len(maillist[1]) != uzantıuzunluğu : TF = False

    #print(maillist)

    kullanıcıadı = ["a","b","c","ç","d","e","f","g","ğ","h","ı","i","j","k","l","m","n","o","ö","p","r","s","ş","t","u","ü","v","y","z","A","B","C","D","E","F","G","Ğ","H","I","İ","J","K","L","M","N","O","Ö","P","R","S","Ş","T","U","Ü","V","Y","Z","0","1","2","3","4","5","6","7","8","9","-","_"]
    websitesi = ["a","b","c","ç","d","e","f","g","ğ","h","ı","i","j","k","l","m","n","o","ö","p","r","s","ş","t","u","ü","v","y","z","A","B","C","D","E","F","G","Ğ","H","I","İ","J","K","L","M","N","O","Ö","P","R","S","Ş","T","U","Ü","V","Y","Z","0","1","2","3","4","5","6","7","8","9"]

    for harf in maillist[0] :
        if harf in kullanıcıadı : pass
        else : TF = False



    for harf in maillist[1][0] :
        if harf in websitesi : pass
        else : TF = False
        
    print(uzantıuzunluğu)
    print(mail)
    
    if TF : print("Mail adresiniz doğrudur.")
    else : print("Mail adresiniz yanlıştır.")

else :
    print(uzantıuzunluğu)
    print(mail)
    print("Mail adresiniz yanlıştır.")
