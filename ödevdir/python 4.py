#pyhton 2


def kontrol(str): 
  count = 0
  for et in str:
    if et == '@':
      count = count + 1
 
  if count == 1:
    return True
  else:
    return False
 
mail=input('Mail : ')
if(kontrol(mail)==True):
      print('Doğru')
else:
      print('Yanlış')