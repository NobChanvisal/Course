#include <iostream>
#include <Windows.h>
#include <conio.h>
#include <fstream>
#include "D:\RUPP\Teaching\Cpp Teaching\13_File\Exercise\2/Product.h"
#include "D:\RUPP\Teaching\Cpp Teaching\13_File\Exercise\2/Staff.h"
#include "D:\RUPP\Teaching\Cpp Teaching\13_File\Exercise\2/Design.h"


using namespace std;

int procount = 0;
int staffcount = 0;
Design design;
Staff staff[100],st;
Product pro[100];

class StaffMenu{  
    public:
        void insert();
        void read();
        void display();
        void search();
        void update();
        void deletes();
        void menu();
};
class ProductMenu{
    public:
        void insert();
        void read();
        void display();
        void search();
        void update();
        void deletes();
};
StaffMenu stmenu;
void login();
void loadings(){
    design.setColor(10);
    design.loading();
    design.setColor(7);
}
int main(){
    // login();
    stmenu.menu();
}
void login() {
    string username;
    char password[20]; // Array to store the password
    char temp1;
    int i = 0; // To track the position in the password array

    cout << endl;
    cout << "Login to your account" << endl;
    cout << "---------------------------------" << endl;
    cout << "Enter username: ";
    cin >> username;
    cout << "Enter Password: ";

    while (true) {
        temp1 = getch();
        if (temp1 == '\r') {
            password[i] = '\0'; 
            break;
        }
        if (temp1 == '\b') {
            if (i > 0) {
                cout << "\b \b"; 
                i--;
            }
            continue;
        }
        if (i < 19 && (temp1 >= 32 && temp1 <= 126)) {
            password[i] = temp1;
            cout << "*";
            i++;
        }
    }
    int found = 0;
    stmenu.read();
    if (string(password) == "admin123" && username == "Admin") {
        cout << "\nLogin Successful!" << endl;
        stmenu.menu();
        found = 1;
    } 
    for(int i = 0; i<staffcount; i++){
        if(string(password) == staff[i].password){
            cout << "\nLogin Successful!" << endl;
            // staffMenu();
            cout<< "Staff"<<endl;
            found = 1;
        }
    }
    if(found == 0){
        cout<< "username or password not correct !!"<<endl;
    }
}
void StaffMenu::menu(){
    int opt;
    do
    {
        loadings();
        cout<< "Manage Staff Data"<<endl;
        cout<< "------------------------"<<endl;
        cout<< "(1). Register Staff"<<endl;
        cout<< "(2). View Staff"<<endl;
        cout<< "(3). Search          "<<endl;
        cout<< "(4). Update"<<endl;
        cout<< "(5). Delete"<<endl;
        cout<< "(6). Back"<<endl;
        cout<< "________________________"<<endl<<endl;
        cout<< "Enter option[1-6]> ";cin>>opt;
        switch (opt)
        {
        case 1:
            loadings();
            insert();
            break;
        case 2:
            loadings();
            cout<< "-----------------"<<endl;
            cout<< "Staff List :"<<endl;
            cout<< "-----------------"<<endl<<endl;
            st.heading();
            display();
            break;
        case 3:
            loadings();
            cout<< "-----------------"<<endl;
            cout<< "Search staff :"<<endl;
            cout<< "-----------------"<<endl<<endl;
            search();
            break;
        case 4:
            loadings();
            cout<< "-----------------"<<endl;
            cout<< "Edit staff :"<<endl;
            cout<< "-----------------"<<endl<<endl;
            update();
            break;
        case 5:
            loadings();
            cout<< "-----------------"<<endl;
            cout<< "Edit staff :"<<endl;
            cout<< "-----------------"<<endl<<endl;
            deletes();
            break;
        case 6:
            break;
        default:
            break;
        }
    } while (opt != 6);
    
}
void StaffMenu::insert(){
    fstream file("stafflist.txt",ios::app);
    cout<< "-----------------"<<endl;
    cout<< "Insert :"<<endl;
    cout<< "-----------------"<<endl<<endl;
    staff[staffcount].input();
    file<<staff[staffcount].id<< " "
        <<staff[staffcount].username<< " "
        <<staff[staffcount].gender<< " "
        <<staff[staffcount].phone<< " "
        <<staff[staffcount].password<<endl;
        staffcount++;
    file.close();
    cout <<endl<< "Staff data inserted successfully!" << endl;
    cout<<endl<< "Press any key to menu !!";
    getch();
}
void StaffMenu::read(){
    fstream file("stafflist.txt",ios::in);
    if(!file){
        cout<< "File not found "<<endl;
        return;
    }
    staffcount = 0;
    while(
        file>>staff[staffcount].id
            >>staff[staffcount].username
            >>staff[staffcount].gender
            >>staff[staffcount].phone
            >>staff[staffcount].password
        )
    {
        staffcount++;
    }
    file.close();

}
void StaffMenu::display(){
    read();
    for(int i = 0; i<staffcount; i++){
        staff[i].output();
    }
    cout<<endl<< "Press any key to menu !!";
    getch();
}
void StaffMenu::search(){
    int search;
    int found = 1;
    cout<< "Enter id to search : ";
    cin>>search;
    if(staffcount < 0){
        cout<< "No Staff Data please register"<<endl;
    }
    else{
        read();
        for(int i = 0; i<staffcount; i++){
            if(staff[i].id == search){
                st.heading();
                staff[i].output();
                found = 1;
            }
        }
        if(found == 0){
            cout<< "Staff not found !!"<<endl;
        }
    }  
    cout<<endl<< "Press any key to menu !!";
    getch(); 
}
void StaffMenu::update(){
    int upid;
    int find = 0;
    fstream file("stafflist.txt", ios::out);
    cout<< "Enter id to update > ";
    cin>>upid;
    for(int i = 0; i<staffcount; i++){
        if(staff[i].id == upid){
            cout<< "Enter new name : ";
            cin>>staff[i].username;
            cout<< "Enter new gender : ";
            cin>>staff[i].gender;
            cout<< "Enter new phone  : ";
            cin>>staff[i].phone;
            cout<< "Enter new password : ";
            cin>>staff[i].password;
            find = 1;
            break;
        }
    }
    for(int i = 0; i<staffcount; i++){
        file<<staff[i].id<< " "
            <<staff[i].username<< " "
            <<staff[i].gender<< " "
            <<staff[i].phone<< " "
            <<staff[i].password<<endl;
    }
    file.close();
    if(find == 0){
        cout<< "Staff not found !!"<<endl;
    }
    else{
        cout<< "Update successfully !!"<<endl;
    }
    cout<<endl<< "Press any key to continue !!";
    getch();
}
void StaffMenu::deletes() {
    int delid;
    int find = 0;  
    cout << "Enter id to delete > ";
    cin >> delid;

    fstream tem("temp.txt", ios::out);  

    for (int i = 0; i < staffcount; i++) {
        if (staff[i].id != delid) {
            tem << staff[i].id << " "
                << staff[i].username << " "
                << staff[i].gender << " "
                << staff[i].password << " "
                << staff[i].phone << "\n";
                find = 0;
        } else {
            find = 1; 
        }
    }
    
    tem.close();
    if (find == 0) {
        cout << "Staff not found!!!" << endl;
        remove("temp.txt");
    } 
    else {
        remove("stafflist.txt");  
        rename("temp.txt", "stafflist.txt");  
        cout << "Delete successful!" << endl;
    }
    cout<< find<<endl;
    cout << endl << "Press any key to continue!!";
    getch();  
}



