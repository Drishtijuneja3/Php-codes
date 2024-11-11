my_string="Bharati"
char_to_find=input("Enter character you want to find: ")
positions=[i for i, char in enumerate(my_string) if char==char_to_find]
if positions:
  print(f"The character {char_to_find} is found at positions {positions}")
else:
  print(f"The character "{char_to_find}" is not found in string")
print("This code is written by Drishti")
