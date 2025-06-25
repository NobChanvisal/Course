class Book:
    def  __init__(self,id,title,author,price,qty):
        self.id = id
        self.title = title
        self.author = author
        self.price = price
        self.qty = qty
    def getBook(self):
        return f"{self.id},{self.title},{self.author},{self.price},{self.qty}"
class BookManage:
    def __init__(self):
        self.books = []
        self.filename = "booksData.txt"
    def addBook(self):
        id = int(input("enter id : "))
       