a = 0
#problem set 1
while a < 100:
    a += 1
    if a % 15 == 0 :
      print("fizzbuzz")
    elif a % 5 == 0 :
      print("buzz") 
    elif a % 3 == 0 :
      print("fizz")   
    else :
      print(a)  