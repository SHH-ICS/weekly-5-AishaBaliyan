input = int(input("enter the number: "))
j = 1    
i = 0  
for n in range(input + 1): 
    i += j * (4 / (2 * n + 1))
    j *= -1                
print(i)
