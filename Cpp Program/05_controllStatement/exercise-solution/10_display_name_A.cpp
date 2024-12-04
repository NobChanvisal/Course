#include <iostream>
#include <conio.h>

using namespace std;
int main(){
	string name,gen;
	cout<<endl<<endl;
	cout<< "\tEnter name  : ";cin>>name;
	cout<< "\tEnter Gender: ";cin>>gen;
	cout<<         "\t______________________________"<<endl<<endl;
		if(gen == "female" || gen == "Female"){
			cout<< "\t    Ms."<<name<<endl;
			cout<< "\t    Female"<<endl;
		}
		if(gen == "Male" || gen == "male")
		{
			cout<< "\t    Name:   Mr."<<name<<endl;
			cout<< "\t    Gender: Male"<<endl; 
		}
	cout<<         "\t______________________________"<<endl<<endl;
	getch();
	return 0;
}