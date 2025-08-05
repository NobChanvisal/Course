#include <iostream>
using namespace std;

class Person {
    private:
        int id;
        string name;
        char gender;
        string BOD;
    public:
        void input() {
            cout << "\nEnter ID: ";
            cin >> id;
            cout << "Enter Name: ";
            cin>>name;
            cout<< "Enter gender (M/F): ";
            cin>>gender;
            cout << "Enter Date of Birth (DD/MM/YYYY): ";
            cin >> BOD;
        }
        void print() {
            cout<<endl;
            cout << "ID           : " << id << endl;
            cout << "Name         : " << name << endl;
            cout << "Gender       : "<<gender << endl;
            cout << "Date of Birth: " << BOD << endl;
                    
        }
};

class Student : public Person {
    private:
        float htmlMarks;
        float cssMarks;
        float javaMarks;
    public:
        void input() {
            Person::input();
            cout << "Enter HTML Marks: ";
            cin >> htmlMarks;
            cout << "Enter CSS Marks : ";
            cin >> cssMarks;
            cout << "Enter Java Marks: ";
            cin >> javaMarks;
        }
        float average() {
            return (htmlMarks + cssMarks + javaMarks) / 3.0f;
        }
        void grade() {
            float avg = average();
            if (avg >= 90) {
                cout << "Grade        : A" << endl;
            } else if (avg >= 80) {
                cout << "Grade        : B" << endl;
            } else if (avg >= 70) {
                cout << "Grade        : C" << endl;
            } else if (avg >= 60) {
                cout << "Grade        : D" << endl;
            } else {
                cout << "Grade        : F" << endl;
            }
        }
        void print() {
            Person::print();
            cout << "HTML Marks   : " << htmlMarks << endl;
            cout << "CSS Marks    : " << cssMarks << endl;
            cout << "Java Marks   : " << javaMarks << endl;
            cout << "Average Marks: " << average() << endl;
            grade();
        }
};

class Teacher : public Person {
    private:
        string subject;
        float hourwork;
        float salary;
    public:
        void input() {
            Person::input();
            cout << "Enter Subject: ";
            cin >> subject;
            cout << "Enter Hour Work: ";
            cin >> hourwork;
            cout << "Enter Salary: ";
            cin >> salary;

        }
        float total() {
            return hourwork * salary;
        }
        float taxAmount() {
            float t = total();
            if (t <= 5000) {
                return 0;
            } 
            else if (t <= 10000) {
                return t * 0.05; // 5% tax
            } 
            else if (t <= 20000) {
                return t * 0.1; // 10% tax
            } 
            else {
                return t * 0.15; // 15% tax
            }
        }
        void print() {
            Person::print();
            cout << "Subject      : " << subject << endl;
            cout << "Hour Work    : " << hourwork << endl;
            cout << "Salary       : " << salary << endl;
            cout << "Tax Amount   : " << taxAmount() << endl;
            cout << "Total salary : "<< total() - taxAmount();
        }
};

int main(){
    int stucount =0,teacount = 0;
    int opt;
    Student students[100];
    Teacher teachers[100];
    do
    {
        cout<<"\n1.Add student"<<endl;
        cout<<"2.Add teacher"<<endl;
        cout<<"3.View student"<<endl;
        cout<<"4.view teacher"<<endl;
        cout<<"5.exit"<<endl;
        cout<<"------------------------"<<endl;
        cout<<"enter option : ";
        cin>>opt;
        switch (opt)
        {
        case 1:
            students[stucount].input();
            stucount++;
            
            break;
        case 2:
            teachers[teacount].input();
            teacount++;
            break;
        case 3:
            cout<<"----------------------------------"<<endl;
            cout<<"Student information"<<endl;
            cout<<"-----------------------------"<<endl;
            for (int i = 0; i < stucount; i++)
            {
                students[i].print();
            }
            break;
        case 4:
            cout<<"----------------------------------"<<endl;
            cout<<"Teacher information"<<endl;
            cout<<"----------------------------------"<<endl;
            for (int i = 0; i < teacount; i++)
            {
                teachers[i].print();
            }
            break;
        case 5:
            break;
        
        default:
            break;
        }
    } while (opt != 5);
    
}