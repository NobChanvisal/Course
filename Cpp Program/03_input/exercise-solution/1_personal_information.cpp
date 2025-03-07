#include <iostream>
#include <string>
#include<conio.h>
using namespace std;
int main(){
	string fname, u;//string
	string lname;
	char gender;////char
	unsigned int age;
	//Input:
	cout<<"Fill information"<<endl;
	cout<<"-------------------------"<<endl;
	cout<<"Enter Firtname   :";getline(cin,fname);fflush(stdin);
	cout<<"Enter Lastname   :";getline(cin,lname);fflush(stdin);
	cout<<"Enter Gender     :";cin>>gender;fflush(stdin);
	cout<<"Enter Age        :";cin>>age;fflush(stdin);
	cout<<"Enter University :";getline(cin,u);fflush(stdin);
	//output:
	cout<<"_________________________"<<endl;
	cout<<"Firtname   : "<<fname<<endl;
	cout<<"Lastname   : "<<lname<<endl;
	cout<<"Fullname   : "<<fname<<" "<<lname<<endl;
	cout<<"Gender     : "<<gender<<endl;
	cout<<"Age        : "<<age<<endl;
	cout<<"University : "<<u<<endl;
	getch();
	return 0;
}