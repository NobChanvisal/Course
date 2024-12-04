#include<iostream>
#include<conio.h>
using namespace std;

int main(){
    int id[50];
    string name[50];
    char sex[50];
    float gpa[50];
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
    cout<<"Output Student data : "<<endl;
    for(int i = 1; i<=n; i++){
        cout<<endl << "Student " << i << " :" << endl;
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "Gpa  : " << gpa[i] << endl;
    }
//search
    cout<<endl<< "Enter Student Id to search : ";
    cin>>search;
    int found = 0;
    for(int i = 1; i<=n; i++){
        if(id[i] == search){
            cout<< "Student Found "<<endl;
            cout<< "-----------------------"<<endl;
            cout << "Id   : " << id[i] << endl;
            cout << "Name : " << name[i]<< endl;
            cout << "Sex  : " << sex[i] << endl;
            cout << "Gpa  : " << gpa[i]<< endl;
            found = 1;
            break;
        }
    }

    if(!found){
        cout<< "Student not Found!! "<<endl;
    }
    getch();
    return 0;
}