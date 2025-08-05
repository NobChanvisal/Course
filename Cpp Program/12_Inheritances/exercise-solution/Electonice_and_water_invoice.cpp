#include <iostream>
#include <iomanip>
#include <conio.h>
#include <stdlib.h>
#include <cstring>

using namespace std;

class Electricity{
	private:
		float use;
		float newnumber;
		float oldnumber;
	public:
		Electricity();
		Electricity(float n, float old);
		void input();
		void print();
		void println();
		float average();
};
Electricity::Electricity():newnumber(1),oldnumber(0){};
Electricity::Electricity(float n, float old):newnumber(n),oldnumber(old){};
void Electricity::input(){
	cout<< "\t=> Electricity:"<< endl;
	cout<< "\tEnter Newnumber : ";cin>> newnumber;
	cout<< "\tEnter Oldnumber : ";cin>> oldnumber;
}
void Electricity::print(){
	cout<< left<< setw(15) << average();
}
void Electricity::println(){ print(); cout<< endl; }
float Electricity::average(){
	if(oldnumber >= newnumber)	cout<< "Plese enter again!!"<< endl;
	else{
		use = newnumber - oldnumber;
		if (use < 50)
		{
			return use * 750;
		}
		else if(use <= 100){
			return (use * 750) + (use - 50) * 550;
		}
		else if(use <= 200){
			return (use * 7550) + (use * 550) + (use - 50) * 450;
		}
		else {
			return (use * 7550) + (use * 550) + (use * 450) + (use - 50) * 350;
		}
		
	}
}
class Water{
	private:
		float use;
		float newnumber;
		float oldnumber;
	public:
		Water();
		Water(float nm, float om);
		void input();
		void print();
		void println();
		float average();
};
Water::Water():newnumber(1),oldnumber(0){};
Water::Water(float nm, float om):newnumber(nm),oldnumber(om){};
void Water::input(){
	cout<< "\t=> Water:"<< endl;
	cout<< "\tEnter Newnumber : ";cin>> newnumber;
	cout<< "\tEnter Oldnumber : ";cin>> oldnumber;
}
void Water::print(){
	cout<< left<< setw(15) << average();
}
void Water::println(){ print(); cout<< endl; }
float Water::average(){
	if(oldnumber >= newnumber)	cout<< "Plese enter again!!"<< endl;	
	else{
		use = newnumber - oldnumber;
		if(use < 7){
			return use * 400;
		}
		else if (use < 15)
		{
			return (7* 400) + (use - 7)* 720;
		}
		else if(use < 25){
			return (7* 400) + (15 * 720) + (use -15) * 960;
		}
		else if(use < 50){
			return (7* 400) + (15 * 720) + (25 * 960) + (use - 25) * 1250;
		}
		else if(use < 100){
			return (7* 400) + (15 * 720) + (25 * 960) + (50 * 1250) + (use - 50) * 1900;
		}
		else{
			return (7* 400) + (15 * 720) + (25 * 960) + (50 * 1250) + (100 * 1900) + (use - 100) * 2200;

		}
	}
}
class Customer:public Electricity, public Water{
	private:
		char name[20];
	public:
		Customer();
		Customer(float n, float old, float nm, float om,char *na);
		void input();
		void print();
		void println();
		float payment();
		static void heading();
};
Customer::Customer()
{
}
Customer::Customer(float n, float old, float nm, float om, char *na) : Electricity(n, old), Water(nm, om)
{strcpy(name,na);}
void Customer::input(){
		cout<<endl<< "\tEnter name : ";fflush(stdin);cin.get(name,20);
		Electricity::input();
		Water::input();
		
}
void Customer::print(){
		cout<< "\t";
		cout<<left<< setw(20) << name;
		Electricity::print();
		Water::print();
		cout<<left<< setw(15) << payment();
}
void Customer::println(){
	print();
	cout<< endl;
}
void Customer::heading(){
	cout<< "\t";
	cout<< left<< setw(20) << "Name";
	cout<< left<< setw(15) << "A_Electro";
	cout<< left<< setw(15) << "A_Water";
	cout<< left<< setw(15) << "Payment"<<endl;
	cout<< "\t---------------------------------------------------"<<endl;
}
float Customer::payment(){ return Electricity::average() + Water::average();}

int main(){
	
	Customer cus[3] = { Customer(2.0,1.0,4.0,3.0,"Visal"),
						Customer(5.0,4.0,2.0,1.0,"sal"),
						Customer(10.0,5.0,15.0,5.0,"visal"),};
	cout<<endl<< "\t\tDefualt :"<< endl;
	Customer::heading();
	for(int i = 0; i<3; i++){
		cus[i].println();
	}

	int n = 0;
	cout<<"\nenter number of customer : ";
	cin>>n;
	cout<<"----------------------------"<<endl;
	for (int i = 0; i < n; i++)
	{
		cus[i].input();
	}
	
	Customer::heading();
	for(int i = 0; i<n; i++){
		cus[i].println();
	}
	
		
	
}
