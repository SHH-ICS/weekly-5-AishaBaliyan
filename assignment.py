number = (input("enter the number: "))
if number.isdigit():  
    number = int(number)
    if number < 0:
            print("error")
    else:
        j = 1    
        i = 0  
        for n in range(number + 1): 
            i += j * (4 / (2 * n + 1))
            j *= -1                
        print(i)
else:
    print("error")
