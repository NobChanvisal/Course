#include <iostream>
#include <iomanip>
using namespace std;
class Staffs {
    public:
        int id; 
        string name;
        char gender;
        float salary; 
        string phone;

    public:
        void heading();
        void input();
        void output();
};

void Staffs::heading(){
    cout<<left;
    cout<<setw(10)<< "Id"
        <<setw(30)<< "Name"
        <<setw(8)<<  "Gender"
        <<setw(10)<< "Salary"
        <<setw(15)<< "Phone"<<endl;
    for(int i = 0; i<73; i++){
        cout<<"-";
    }
    cout<<endl;
}
void Staffs::input(){
    cout<< "Enter staff id          : ";
    cin>>id;
    cout<< "Enter staff name        : ";
    cin>>name;
    cout<< "Enter staff gender[M/F] : ";
    cin>>gender;
    cout<< "Enter staff salary[$]   : ";
    cin>>salary;
    cout<< "Enter staff phone number: ";
    cin>>phone;
}
void Staffs::output(){
    cout<<left;
    cout<<setw(10)<< id
        <<setw(30)<< name
        <<setw(8)<<  gender
        <<setw(10)<< salary
        <<setw(15)<< phone<<endl;
}

