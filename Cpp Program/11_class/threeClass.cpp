#include <iostream>
#include <conio.h>
using namespace std;

class Person {
public:
    int id;
    string name;
    int age; 
public: 
    void input();
    void output();
};

class Book {
public:
    int page, year;
    string name, author;
public:
    void input();
    void output();
};

class Computer {
public:
    string model;
    int ram;
    float price;
    string color;
public:
    void input();
    void output();
};

// Person methods
void Person::input() {
    cout <<endl<<  "Input Data of Person"<<endl;
    cout << "Enter ID: ";
    cin >> id;
    cout << "Enter name: ";
    cin >> name;
    cout << "Enter age: ";
    cin >> age;
}

void Person::output() {
    cout <<endl<<  "Ouput Data of Person"<<endl;
    cout << "ID: " << id << endl;
    cout << "Name: " << name << endl;
    cout << "Age: " << age << endl;
}

// Book methods
void Book::input() {
    cout <<endl<<  "Input Data of Book"<<endl;
    cout << "Enter book name: ";
    cin >> name;
    cout << "Enter author name: ";
    cin >> author;
    cout << "Enter page : ";
    cin >> page;
    cout << "Enter year of publication: ";
    cin >> year;
}

void Book::output() {
    cout <<endl<<  "Ouput Data of Book"<<endl;
    cout << "Book Name: " << name << endl;
    cout << "Author: " << author << endl;
    cout << "Page of Book: " << page << endl;
    cout << "Year of Publication: " << year << endl;
}

// Computer methods
void Computer::input() {
    cout <<endl<<  "Input Data of Computer"<<endl;
    cout << "Enter model: ";
    cin >> model;
    cout << "Enter RAM size (in GB): ";
    cin >> ram;
    cout << "Enter price: ";
    cin >> price;
    cout << "Enter color: ";
    cin >> color;
}

void Computer::output() {
    cout <<endl<<  "Ouput Data of Computer"<<endl;
    cout << "Model: " << model << endl;
    cout << "RAM: " << ram << " GB" << endl;
    cout << "Price: $" << price << endl;
    cout << "Color: " << color << endl;
}

int main() {
    Person p;
    Book b;
    Computer c;
    p.input();
    b.input();
    c.input();

    p.output();
    b.output();
    c.output();
	getch();
    return 0;
}
