#include <iostream>
#include <fstream>
#include <Windows.h>
#include <conio.h>
#include "D:\RUPP\Teaching\Cpp Teaching\13_File\textFile\7_staff/Staffs.h"


Staffs staff[100],st;
int count = 0;
void insert();
void read();
void view();
void search();
void deletes();
void update();
void menu();

int main(){
    menu();
}

void menu(){
    int opt;
    do
    {

        cout<<endl<< "Staff management"<<endl;
        cout<< "------------------------------"<<endl;
        cout<< " [1]. Insert Staff"<<endl;
        cout<< " [2]. View Staff"<<endl;
        cout<< " [3]. Search Staff"<<endl;
        cout<< " [4]. Update Staff"<<endl;
        cout<< " [5]. Delete Staff"<<endl;
        cout<< " [6]. Exit        "<<endl;
        cout<< "______________________________"<<endl<<endl;
        cout<< "Enter option[1-6] : ";
        cin>>opt;
        switch(opt){
            case 1 : 
               
                cout<<endl<< "< Insert Data >"<<endl;
                cout<<        "----------------"<<endl<<endl;
                insert();
                break;
            case 2 :
               
                cout<<endl<< "< Staffs List >"<<endl;
                cout<< "----------------"<<endl<<endl; 
                view();
                break;
            case 3 : 
                
                cout<<endl<< "< Search Staff >"<<endl;
                cout<< "----------------"<<endl<<endl;
                search();
                break;
            case 4 : 
               
                update();
                break;
            case 5 : 
               
                deletes();
                break;
            case 6 : 
                break;
        }
    } while (opt != 6);
    
}
void insert() {
    ofstream file("Staffs.txt", ios::app);  
    if (!file) {
        cout << "Error opening file!" << endl;
        return;
    }

    staff[count].input();

    file << staff[count].id << " " 
         << staff[count].name << " " 
         << staff[count].gender << " " 
         << staff[count].salary << " " 
         << staff[count].phone << endl;
    
    count++;
    file.close();
    cout <<endl<< "Staff data inserted successfully!" << endl;
    cout<<endl<< "Press any key to continue !!";
    getch();
}

void read() {
    ifstream file("Staffs.txt");
    if (!file) {
        cout << "Error opening file!" << endl;
        return;
    }

    count = 0;  
    while (file >> staff[count].id 
                >> staff[count].name 
                >> staff[count].gender 
                >> staff[count].salary 
                >> staff[count].phone
            ) {
        count++;  
    }

    file.close();
}

void view(){
    read();
    if(count <= 0){
        cout<<endl<< "No staff data"<<endl;
    }
    else{
        st.heading();
        for(int i = 0; i<count; i++){
            staff[i].output();
        }
    }

    cout<<endl<< "Press any key to continue !!";
    getch();
    
}
void search(){
    int find = 0;
    int sid;
    read();
    cout<< "Enter id to search : ";
    cin>>sid;

    for (int i = 0; i < count; i++)
    {
        if(staff[i].id == sid){
            st.heading();
            staff[i].output();
            find = 1;
        }
    }
    if(find == 0){
        cout<< "Student not found "<<endl;
    }  

    cout<<endl<< "Press any key to continue !!";
    getch();
}
void update() {
    int upid, newId;
    string newName, newPhone;
    char newGender;
    float newSalary;
    int find = 0;

    read();  // Read current staff data into memory
    cout << "Enter ID to update: ";
    cin >> upid;

    fstream file("Staffs.txt", ios::out);  // Open the file to write updated data
    if (!file) {
        cout << "Error opening file!" << endl;
        return;
    }

    for (int i = 0; i < count; i++) {
        if (staff[i].id == upid) {
            // Get updated information
            cout << "Enter new staff ID: ";
            cin >> newId;
            cout << "Enter new staff name: ";
            cin >> newName;
            cout << "Enter new staff gender [M/F]: ";
            cin >> newGender;
            cout << "Enter new staff salary [$]: ";
            cin >> newSalary;
            cout << "Enter new staff phone number: ";
            cin >> newPhone;

            // Update the staff information in the array
            staff[i].id = newId;
            staff[i].name = newName;
            staff[i].gender = newGender;
            staff[i].salary = newSalary;
            staff[i].phone = newPhone;

            find = 1;
            break;  // Exit after updating
        }
    }

    // Rewrite the entire file with updated information
    for (int i = 0; i < count; i++) {
        file << staff[i].id << " " 
             << staff[i].name << " " 
             << staff[i].gender << " " 
             << staff[i].salary << " " 
             << staff[i].phone << endl;
    }

    file.close();  // Close the file after writing all records

    if (find) {
        cout << "Staff data updated successfully!" << endl;
    } else {
        cout << "Staff ID not found!" << endl;
    }

    cout << "Press any key to continue!";
    getch();  // Wait for a key press
}
void deletes() {
    int del;
    int find = 0;  // Initialize find to 0
    cout << "Enter id to delete: ";
    cin >> del;

    fstream temp("temp.txt", ios::out);
    for (int i = 0; i < count; i++) {
        if (staff[i].id != del) {
            temp << staff[i].id << " "
                 << staff[i].name << " "
                 << staff[i].gender << " "
                 << staff[i].salary << " "
                 << staff[i].phone << endl;
        } else {
            find = 1;  // Found the record to delete
        }
    }
    temp.close();

    if (find == 0) {
        cout << "Staff not found!" << endl;
        remove("temp.txt");  // Remove temp file if staff not found
    } else {
        remove("Staffs.txt");  // Remove original file
        rename("temp.txt", "Staffs.txt");  // Rename temp file to original
        cout << "Delete successful!" << endl;
    }

    cout << endl << "Press any key to continue!";
    getch();
}
