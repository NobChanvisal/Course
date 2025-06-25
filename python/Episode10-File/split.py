myword = "2,chantha,female\n"
words = myword.split(",")

myword2 = "2,chantha,female\n"
words2 = myword2.strip().split(",")

for word in words:
    print(word)
    
print("using strip with split")
for word in words2:
    print(word)