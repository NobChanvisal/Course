#include<iostream>
#include<conio.h>
using namespace std;

int main(){
    int id[50];
    string name[50];
    char sex[50];
    float gpa[50];
    int n,opt;

    cout<<endl<< "Enter numbers of student: ";
    cin>>n;
    cout<< "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<"<<endl;

    for(int i = 1; i<=n; i++){
        cout<<endl<< "Student " << i<< endl << endl;
        cout << "Enter Id      : ";
        cin >> id[i];
        cout << "Enter Name    : ";
        cin >> name[i];
        cout << "Enter Sex[M/F]: ";
        cin >> sex[i];
        cout << "Enter Gpa     : ";
        cin >> gpa[i];
    }
    cout<< "1.View Male   2.View Female   3.View All"<<endl;
    cout<< "Enter Option[1-3] : ";
    cin>>opt;
    cout<<"Output Student data : "<<endl;
    switch (opt)
    {
    case 1:
        for(int i = 1; i<=n; i++){
            if(sex[i] == 'M' || sex[i] == 'm'){
                cout<<endl << "Student " << i << " :" << endl;
                cout << "Id   : " << id[i] << endl;
                cout << "Name : " << name[i] << endl;
                cout << "Sex  : " << sex[i] << endl;
                cout << "Gpa  : " << gpa[i] << endl;
            }
        }
        break;
    case 2:
        for(int i = 1; i<=n; i++){
            if(sex[i] == 'F' || sex[i] == 'f'){
                cout<<endl << "Student " << i << " :" << endl;
                cout << "Id   : " << id[i] << endl;
                cout << "Name : " << name[i] << endl;
                cout << "Sex  : " << sex[i] << endl;
                cout << "Gpa  : " << gpa[i] << endl;
            }
        }
        break;
    case 3:
    	for(int i = 1; i<=n; i++){
            cout<<endl << "Student " << i << " :" << endl;
            cout << "Id   : " << id[i] << endl;
            cout << "Name : " << name[i] << endl;
            cout << "Sex  : " << sex[i] << endl;
            cout << "Gpa  : " << gpa[i] << endl;
        }
        break;
    default:
        break;
    }
    getch();
    return 0;
}