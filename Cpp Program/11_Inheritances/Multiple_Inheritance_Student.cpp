#include <iostream>
#include <conio.h>
#include <cstring>
#include <iomanip>

using namespace std;
class Person{
	protected:
		int id;
		char name[20];
		char sex;
	public:
		Person(){
			id  = 0;
			strcpy(name,"Visal");
			sex = 'M';
		}
		Person(int i, char *n, char s){
			id = i;
			strcpy(name,n);
			sex = s;
		}
		void input(){
			cout << "\tEnter ID   : ";cin>>id;
			cout << "\tEnter Name : ";fflush(stdin);cin.get(name,20);
			cout << "\tEnter Sex  : ";cin>>sex;
		}
		void output(){
			cout << left;
			cout << "\t";
			cout << setw(5) << id;
			cout << setw(20) << name;
			cout << setw(5) << sex;
		}
};
class Academic{
	protected:
		char university[30];
		int year;
	public:
		Academic(){
			strcpy(university,"RUPP");
			year = 2;
		}
		Academic(char *u, int y){
			strcpy(university,u);
			year = y;
		}
		void input(){
			cout << "\tEnter University : ";fflush(stdin);cin.get(university,30);
			cout << "\tEnter Year       : ";cin>>year;
		}
		void output(){
			cout << left;
			cout << "\t";
			cout << setw(20) << university;
			cout << setw(10) << year;
		}
};
class Student:public Person, public Academic{
	private:
		int score;
	public:
		Student(){
			Person(); 
			Academic();
			score = 0;
		}
		Student(int i, char *n, char s, char *u, int y, int c):
			Person(i,n,s), Academic(u,y),score(c){}	
		void input(){
			Person::input();
			Academic::input();
			cout << "\tEnter Score : ";cin>>score;
		}
		void output(){
			Person::output();
			Academic::output();
			cout << "\t"<< score << endl;
		}
};
int main(){
	Student s1,s2(168, "Pek Mii", 'M', "RUPP", 2, 99);
	cout << endl<< "\tOUTPUT DATA OF STUDENT(defualt) : "<< endl;
	cout << "\t-------------------------------"<< endl << endl;
	s2.output();
	cout << endl<< "\tINPUT DATA OF STUDENT : "<< endl;
	cout << "\t-------------------------------"<< endl << endl;
	s1.input();
	cout << endl<< "\tOUTPUT DATA OF STUDENT : "<< endl;
	cout << "\t-------------------------------"<< endl << endl;
	s1.output();
	getch();
	return 0;
}