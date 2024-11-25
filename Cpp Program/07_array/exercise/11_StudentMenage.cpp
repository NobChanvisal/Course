#include <iostream>
using namespace std;

int main() {
    int id[50];
    string name[50];
    char sex[50];
    float gpa[50];
    int deleteid,search;
    int n = 0;
    int opt;

    cout <<endl<< "Student Management System" << endl;
    cout << "----------------------------------------" << endl;

    do {
        cout<<endl;
        cout << "  1. Insert Student" << endl;
        cout << "  2. View Students" << endl;
        cout << "  3. Update Student" << endl;
        cout << "  4. Delete Student" << endl;
        cout << "  5. Search Student" <<endl;
        cout << "  6. Exit" << endl;
        cout << "Enter Option[1-6]: ";
        cin >> opt;

        switch (opt) {
        case 1:
            if (n < 50) {
                cout << "Enter Id   : ";
                cin >> id[n];
                cout << "Enter Name : ";
                cin >> name[n];
                cout << "Enter Sex[M/F]  : ";
                cin >> sex[n];
                cout << "Enter Gpa  : ";
                cin >> gpa[n];
                n++;
            } else {
                cout << "Maximum number of students reached." << endl;
            }
            break;
        case 2:
            cout<<endl<< "----------------------------------"<<endl;
            cout<<setw(5) << "Output Student data: " << endl;
            cout<<setw(30) << "Id   : " << id[i] << endl;
            cout<<setw(5) << "Name : " << name[i] << endl;
            cout<<setw(10) << "Sex  : " << sex[i] << endl;
            cout << "Gpa  : " << gpa[i] << endl;
            for (int i = 0; i < n; i++) {
                cout << endl << "Student " << i + 1 << " :" << endl;
                cout<<left;
                cout<<setw(5)<<id[i];
                cout<<setw(30)<<name[i];
                cout<<setw(5)<<sex[i];
                cout<<setw(10)<<gpa[i]<<endl;
            }
            break;
        case 3:
            cout <<endl<< "Enter the Id of the student to update: ";
            cin >> search;
            for (int i = 0; i < n; i++) {
                if (id[i] == search) {
                    cout << "Enter new Name : ";
                    cin >> name[i];
                    cout << "Enter new Sex[M/F]  : ";
                    cin >> sex[i];
                    cout << "Enter new Gpa  : ";
                    cin >> gpa[i];
                    cout << "Student updated." << endl;
                    break;
                }
            }
            break;
        case 4:
            cout <<endl<< "Enter the Id of the student to delete: ";
            cin >> deleteid;
            for (int i = 0; i < n; i++) {
                if (id[i] == deleteid) {
                    for (int j = i; j < n - 1; j++) {
                        id[j] = id[j + 1];
                        name[j] = name[j + 1];
                        sex[j] = sex[j + 1];
                        gpa[j] = gpa[j + 1];
                    }
                    n--;
                    cout << "Student deleted." << endl;
                    break;
                }
            }
            break;
        case 5:
            cout <<endl<< "Enter the Id of the student to search: ";
            cin >> search;
            for (int i = 0; i < n; i++) {
                if (id[i] == search) {4
                    cout<<left;
                    cout<<setw(5)<<id[i];
                    cout<<setw(30)<<name[i];
                    cout<<setw(5)<<sex[i];
                    cout<<setw(10)<<gpa[i]<<endl;
                    break;
                }
            }
            break;
        case 6:
            cout << "Exiting..." << endl;
            break;
        default:
            cout << "Invalid option. Please try again." << endl;
            break;
        }
    } while (opt != 6);

    return 0;
}
