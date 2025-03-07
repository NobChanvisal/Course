#include<iostream>
#include<conio.h>
using namespace std;

int main(){
    int id[50],newId;
    string name[50],newName;
    char sex[50],newSex;
    float gpa[50],newGpa;
    int n,search;

    cout<<endl<< "Enter numbers of student: ";
    cin>>n;
    cout<< "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<"<<endl;

    for(int i = 1; i<=n; i++){
        cout<<endl<< "Student " << i<< endl << endl;
        cout << "Enter Id   : ";
        cin >> id[i];
        cout << "Enter Name : ";
        cin >> name[i];
        cout << "Enter Sex[M/F]  : ";
        cin >> sex[i];
        cout << "Enter Gpa  : ";
        cin >> gpa[i];
    }
    cout<<endl<<"Output Student data befor update: "<<endl;
    for(int i = 1; i<=n; i++){
        cout<<endl << "Student " << i << " :" << endl;
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "Gpa  : " << gpa[i] << endl;
    }
//update
    cout<<endl<< "Enter Student Id to Update : ";
    cin>>search;
    int found = 0;
    for(int i = 1; i<=n; i++){
        if(id[i] == search){
            cout<< "Enter New Student Data "<<endl;
            cout<< "-----------------------"<<endl;
            cout << "Enter new Id   : " ;cin>> newId;
            cout << "Enter new Name : " ;cin>> newName;
            cout << "Enter new Sex  : " ;cin>> newSex;
            cout << "Enter new Gpa  : " ;cin>> newGpa;

            id[i] = newId;
            name[i] = newName;
            sex[i] = newSex;
            gpa[i] = newGpa;
            found = 1;
            break;
        }
    }

    if(!found){
        cout<< "Student not Found!! "<<endl;
    }

    cout<<endl<<"Output Student data after updated :"<<endl;
    cout<< "--------------------------------"<<endl;
    for(int i = 1; i<=n; i++){
        cout<<endl << "Student " << i << " :" << endl;
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "Gpa  : " << gpa[i] << endl;
    }
    getch();
    return 0;
}