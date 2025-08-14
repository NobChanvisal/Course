#include <iostream>
#include <string>
#include <vector>

using namespace std;

// Base class: Shape
class Shape {
public:
    virtual void input() = 0; // Pure virtual function for input
    virtual void output() const = 0; // Pure virtual function for output
    virtual double area() const = 0; // Pure virtual function for area

};

// Derived class: Circle
class Circle : public Shape {
private:
    double radius;
public:

    
    void input() override {
        cout << "Enter radius of the circle: ";
        cin >> radius;
    }
    
    void output() const override {
        cout << "Circle with radius: " << radius
             << ", Area: " << area() << endl;
    }
    
    double area() const override {
        return 3.14159 * radius * radius;
    }
};

// Derived class: Rectangle
class Rectangle : public Shape {
private:
    double width, height;
public:
    void input() override {
        cout << "Enter width of the rectangle: ";
        cin >> width;
        cout << "Enter height of the rectangle: ";
        cin >> height;
    }
    
    void output() const override {
        cout << "Rectangle with width: " << width
             << ", height: " << height
             << ", Area: " << area() << endl;
    }
    
    double area() const override {
        return width * height;
    }
};

int main() {
   
    int choice;

    do {
        cout << "\nMenu:\n";
        cout << "1. Add Circle\n";
        cout << "2. Add Rectangle\n";
        cout << "3. Display all shapes\n";
        cout << "4. Exit\n";
        cout << "Enter choice: ";
        cin >> choice;

        Shape* shape = nullptr;

        if (choice == 1) {
            Shape* circle = new Circle();
            circle->input();
            
        }
        else if (choice == 2) {
            
        }
        else if (choice == 3) {
            
        }

    } while (choice != 4);


   

    return 0;
}
