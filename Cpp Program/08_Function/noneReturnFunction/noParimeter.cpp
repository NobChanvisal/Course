#include <iostream>

using namespace std;
//function declaretion
void input();
void output();
//declare variable as global
int id;
string name;
char sex;

int main(){
    cout<< "Enter Data"<<endl;
    cout<< "-----------------"<<endl;
    input();//call function
    cout<<endl<< "Output Data "<<endl;
    cout<< "-----------------"<<endl;
    output();//call function
}

//function definition
void input(){
    cout<< "Enter Id : ";
    cin>>id;
    cout<< "Enter Name : ";
    cin>>name;
    cout<< "Enter Sex  : ";
    cin>>sex;
}
void output(){
    cout<<id<<"\t"<< name<< "\t"<<sex<<endl;
}