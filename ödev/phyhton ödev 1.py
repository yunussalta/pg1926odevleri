#python 4
buyuk = []
adet = int(input('Kaç Sayı Girilecek: '))
for n in range(adet):
    sayi = int(input('Sayıyı Gir: '))
    buyuk.append(sayi)
print("Liste İçindeki En Büyük Sayı :", max(buyuk))
   
 