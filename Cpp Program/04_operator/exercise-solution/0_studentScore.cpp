#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int id;
    string name;
    char sex;
    float math;
    float khmer;
    float phy;

    cout<< "Enter Stdent Data "<<endl;
    cout<< "--------------------------------"<<endl;
    cout<< "Enter Id > ";
    cin>>id;
    cout<< "Enter Name > ";
    cin>>name;
    cout<< "Enter Sex  > ";
    cin>>sex;
    cout<< "Enter Math Score > ";
    cin>>math;
    cout<< "Enter Khmer Score > ";
    cin>>khmer;
    cout<< "Enter Physic Score > ";
    cin>>phy;

        float score =(math + khmer + phy)/3;
    
    cout<<endl<< "Data of Student "<<endl;
    cout<< "Student Id      : "<<id<<endl;
    cout<< "Student Name    : "<<name<<endl;
    cout<< "Student Sex     : "<<sex<<endl;
    cout<< "Student Average : "<<score<<endl;

    getch();
    return 0;
}