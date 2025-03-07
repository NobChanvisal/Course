class Student:
    def __init__(self, id, name, gender, html, css, js):
        self.id = id
        self.name = name
        self.gender = gender
        self.html = html
        self.css = css
        self.js = js
    def cal_score(self):
        return self.html + self.css + self.js
    def view(self):
        # self.score = self.cal_score()  
        print(f"{self.id}\t{self.name}\t{self.gender}\t{self.cal_score()}")

student1 = Student("12345", "Alice", "Female", 90, 85, 95)
student2 = Student("12346", "Tail", "Male", 80, 75, 85)

student1.view()
student2.view()