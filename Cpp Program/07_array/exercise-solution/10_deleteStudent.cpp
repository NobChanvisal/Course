#include <iostream>
#include <conio.h>
using namespace std;

int main() {
    int id[50];
    int deleteid;
    string name[50];
    char sex[50];
    float gpa[50];
    int n;

    cout << "Enter number of students: ";
    cin >> n;
    
    if(n > 50) {
        cout << "Number of students cannot exceed 50.";
        return 1;
    }

    cout << "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<" << endl;

    for (int i = 0; i < n; i++) {
        cout << endl << "Student " << i + 1 << endl << endl;
        cout << "Enter Id   : ";
        cin >> id[i];
        cout << "Enter Name : ";
        cin >> name[i];
        cout << "Enter Sex[M/F]  : ";
        cin >> sex[i];
        cout << "Enter Gpa  : ";
        cin >> gpa[i];
    }
    
    cout << endl << "Output Student data before update: " << endl;
    for (int i = 0; i < n; i++) {
        cout << endl << "Student " << i + 1 << " :" << endl;
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "Gpa  : " << gpa[i] << endl;
    }

    // Update
    cout<<endl << "Enter Student ID to delete: ";
    cin >> deleteid;
    int found = 0;
    for (int i = 0; i < n; i++) {
        if (id[i] == deleteid) {
            
            for (int j = i; j < n - 1; j++) {
                id[j] = id[j + 1];
                name[j] = name[j + 1];
                sex[j] = sex[j + 1];
                gpa[j] = gpa[j + 1];
            }
            n--;
            found = 1;
            cout << "Student with ID " << deleteid << " deleted.\n";
            break;
        }
    }
    
    if (!found) {
        cout << "Student with ID " << deleteid << " not found.\n";
    }

    cout << endl << "Output Student data after update: " << endl;
    for (int i = 0; i < n; i++) {
        cout << endl << "Student " << i + 1 << " :" << endl;
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "Gpa  : " << gpa[i] << endl;
    }

    getch();
    return 0;
}
