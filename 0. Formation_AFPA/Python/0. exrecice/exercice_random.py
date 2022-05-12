import random

a = random.randrange(0, 30)
b = random.randrange(0, 30)

if a > b:
    print("Le nombre a est plus grand que le nombre b.")
elif b > a:
    print("Le nombre b est plus grand que le nombre a.")
else :
    print("Le nombre a et le nombre b sont égaux.")