#include <iostream>
using namespace std;

const int MAX_STAFF = 100;

int id[MAX_STAFF];
string name[MAX_STAFF];
float hour[MAX_STAFF];
float salary[MAX_STAFF];

int staffCount = 0;

void input(); // Function to input data
void output(); // Function to output data
float totalSalary(int index); // Function to calculate salary
float tax(int index); // Function to calculate tax by condition

int main() {
    int opt;
    do {
        cout << "Enter option [1-3] :\n1. Input Data\n2. Output Data\n3. Exit\nOption: ";
        cin >> opt;
        switch (opt) {
            case 1:
                input();
                break;
            case 2:
                output();
                break;
            case 3:
                cout << "Exiting..." << endl;
                break;
            default:
                cout << "Invalid option. Please enter 1, 2, or 3." << endl;
        }
    } while (opt != 3);

    return 0;
}

void input() {
    if (staffCount >= MAX_STAFF) {
        cout << "Maximum number of staff reached. Cannot input more data." << endl;
        return;
    }

    cout << endl << "Insert Data Of Staff " << (staffCount + 1) << endl;
    cout << "---------------------------" << endl;
    cout << "Enter ID: ";
    cin >> id[staffCount];
    cout << "Enter name: ";
    cin >> name[staffCount];
    cout << "Enter hours worked: ";
    cin >> hour[staffCount];
    cout << "Enter salary per hour: ";
    cin >> salary[staffCount];
    staffCount++;
    cout << "---------------------------" << endl;
}

void output() {
    cout << endl << "View Data Of Staff" << endl;
    cout << "---------------------------" << endl;
    for (int i = 0; i < staffCount; i++) {
        cout << "ID: " << id[i] << endl;
        cout << "Name: " << name[i] << endl;
        cout << "Hours worked: " << hour[i] << endl;
        cout << "Salary per hour: " << salary[i] << endl;
        cout << "Salary: " << totalSalary(i) << endl;
        cout << "Tax: " << tax(i) << endl;
        cout << "Final salary: " << totalSalary(i) - tax(i) << endl;
        cout << "---------------------------" << endl;
    }
}

float totalSalary(int index) {
    return hour[index] * salary[index];
}

float tax(int index) {
    float t;
    float total = totalSalary(index);
    if (total > 700) {
        t = total * 0.04;
    } else if (total > 550) {
        t = total * 0.03;
    } else if (total > 400) {
        t = total * 0.02;
    } else if (total > 250) {
        t = total * 0.01;
    } else {
        t = 0;
    }
    return t;
}
