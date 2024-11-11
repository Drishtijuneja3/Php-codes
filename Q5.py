def add(a,b):
  """Returns sum of a and b
  Parameters
  a(int,float): First number
  b(int,float): Second number 
  Returns-
  int,float: Sum of a and b"""
  return a+b
def sub(a,b):
  """Returns difference of a and b
  Parameters
  a(int,float): First number
  b(int,float): Second number
  Returns-
  int,float:difference of a and b"""
  return a-b
#Main part of script
if __name__=="__main__":
  x,y=10,5
print(f"The sum of {x} snd {y} is {add(x,y)}")
print(f"The difference between {x} and {y} is {sub(x,y)}")
print("This code is written by Drishti")
