#python 3
def diz(d):
  sifir = []
  kalanlar = list()
  for   i in d :
    if i == 0 :
        sifir.append(i)
    else :
        kalanlar.append(i)
  sonuc = sifir + kalanlar 
  return (sonuc)
test = [0,2,5,8,6,0,0,7]
d = diz(test)
print(d)