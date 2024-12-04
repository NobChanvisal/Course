#include <iostream>
#include <iomanip>
#include <conio.h>
#include <windows.h>
using namespace std;

int main() {
    int empId[50];
    string empName[50];
    char empSex[50];
    float empSalary[50];
    int deleteEmpId, searchEmpId;
    int empCount = 0;
    int opt;
    char a;
    cout <<endl<<endl<< "Welcome to Employee Management System" << endl;
    cout << "----------------------------------------" << endl;
    do {
        
        cout<< "Press any key go to menu ....";
        getch();
        system("cls");
        
        cout << "----------------------------------------" << endl;
        cout << "  1. Insert Employee" << endl;
        cout << "  2. View Employees" << endl;
        cout << "  3. Update Employee" << endl;
        cout << "  4. Delete Employee" << endl;
        cout << "  5. Search Employee" << endl;
        cout << "  6. Exit" << endl;
        cout << "---------------------------------"<<endl;
        cout << "Enter Option[1-6]: ";
        cin >> opt;
        switch (opt) {
        case 1:
        label:
            cout<< "--------------------------"<<endl;
            cout<< "Insert Data"<<endl;
            cout<< "--------------------------"<<endl;
            if (empCount < 50) {
                cout << "Enter Employee Id   : ";
                cin >> empId[empCount];
                cout << "Enter Employee Name : ";
                cin >> empName[empCount];
                cout << "Enter Sex[M/F]      : ";
                cin >> empSex[empCount];
                cout << "Enter Salary        : ";
                cin >> empSalary[empCount];
                empCount++;
            } else {
                cout << "Maximum number of employees reached." << endl;
            }
            cout<< "Do you want to add another ?[y/n] : ";
            cin>>a;
            if(a == 'y' || a == 'Y'){
                system("cls");
                goto label;
            } 
            else{
                break;
            }
            break;
        case 2:
            system("cls");
            cout <<endl<< "----------------------------------"<<endl;
            cout << "Employee List:" << endl;
            cout << "----------------------------------------"<<endl<<endl;
            cout << left;
                cout << setw(5) << "ID";
                cout << setw(30) << "NAME";
                cout << setw(5) << "SEX";
                cout << setw(10) << "SALARY" << endl;
            cout << "-------------------------------------------------------"<<endl;
            for (int i = 0; i < empCount; i++) {
                cout << left;
                cout << setw(5) << empId[i];
                cout << setw(30) << empName[i];
                cout << setw(5) << empSex[i];
                cout << setw(10) << empSalary[i] << endl;
            }
            cout << "----------------------------------"<<endl<<endl;
            break;
        case 3:
            system("cls");
            cout <<endl<< "Enter the Id of the employee to update: ";
            cin >> searchEmpId;
            for (int i = 0; i < empCount; i++) {
                if (empId[i] == searchEmpId) {
                    cout << "Enter new Employee Name : ";
                    cin >> empName[i];
                    cout << "Enter new Sex[M/F]      : ";
                    cin >> empSex[i];
                    cout << "Enter new Salary        : ";
                    cin >> empSalary[i];
                    cout << "Employee updated." << endl;
                    break;
                }
            }
            
            break;
        case 4:
            system("cls");
            cout <<endl<< "Enter the Id of the employee to delete: ";
            cin >> deleteEmpId;
            for (int i = 0; i < empCount; i++) {
                if (empId[i] == deleteEmpId) {
                    for (int j = i; j < empCount - 1; j++) {
                        empId[j] = empId[j + 1];
                        empName[j] = empName[j + 1];
                        empSex[j] = empSex[j + 1];
                        empSalary[j] = empSalary[j + 1];
                    }
                    empCount--;
                    cout << "Employee deleted." << endl;
                    break;
                }
            }
            break;
        case 5:
            cout <<endl<< "Enter the Id of the employee to search: ";
            cin >> searchEmpId;
            for (int i = 0; i < empCount; i++) {
                if (empId[i] == searchEmpId) {
                    cout <<left;
                    cout <<setw(5) << empId[i];
                    cout <<setw(30) << empName[i];
                    cout <<setw(5) << empSex[i];
                    cout <<setw(10) << empSalary[i] << endl;
                    break;
                }
            }
            getch();
            system("cls");
            break;
        case 6:
        system("cls");
            cout << "Exiting..." << endl;
            break;
        default:
            cout << "Invalid option. Please try again." << endl;
            break;
        }
    } while (opt != 6);

    getch();
    return 0;
}
