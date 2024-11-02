#include <iostream>
#include <iomanip>
#include <conio.h>
#include <stdlib.h>
#include <cstring>

using namespace std;

class Electricity{
	protected:
		float pay;
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
	cout<<endl<< "\t Electricity:"<< endl;
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
		if(use < 200)
			if(use < 150)
				if(use < 100)
					if(use < 50)
						pay = use * 350;
					else
						pay = use * 400;
				else
					pay = use * 500;
			else
				pay = use * 600;
		else
			pay = use * 700;
	}
	return pay;
}
class Water{
	protected:
		float pay;
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
	cout<<endl<< "\t Water:"<< endl;
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
		if(use >= 7)
			if(use >= 15)
				if(use >= 25)
					if(use >= 50)
						if(use > 100)
						pay = use * 2200;
					else
						pay = use * 1900;
				else
					pay = use * 1250;
			else
				pay = use * 960;
		else
			pay = use * 720;
	else
			pay = use * 400;
	}
	return pay;
}
class Customer:public Electricity, public Water{
	protected:
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
		cout<< "\tEnter name : ";fflush(stdin);cin.get(name,20);
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
Customer *maxWater(Customer cus[], int n);
Customer *maxElect(Customer cus[], int n);
Customer *maxPay(Customer cus[], int n);
int main(){
	Customer *ptr;
	Customer cus[3] = { Customer(2.0,1.0,4.0,3.0,"Visal"),
						Customer(5.0,4.0,2.0,1.0,"sal"),
						Customer(10.0,5.0,15.0,5.0,"visal"),};
	cout<<endl<< "\t\tDefualt :"<< endl;
	Customer::heading();
	for(int i = 0; i<3; i++){
		cus[i].println();
	}

	int n = 0;
	do{
			cout<<endl<< "\t\tCustomer "<<n+1<< ":"<< endl;
			cus[n++].input();
			//if(n>=2) break;
			cout << "\t\tESC to stop!!!"<< endl;
	
	}while(getch() != 27);
	
	cout<< endl<< "\tHere are data of Customer you input:"<< endl;
	Customer::heading();
	for(int i = 0; i<n; i++){
		cus[i].println();
	}
	//Maximum of use water::
	ptr = maxWater(cus,n);
	cout<< endl<< "\tMaximum of use Water: "<< endl<<endl;
	Customer::heading();
	ptr ->Customer::println();
		
	//Maximum of use Electronice::
	ptr = maxElect(cus,n);
	cout<< endl<< "\tMaximum of use Electronice: "<< endl<<endl;
	Customer::heading();
	ptr ->Customer::println();
	//Maximum of payment::
	
	ptr = maxPay(cus,n);
	cout<< endl<< "\tMaximum of Payment: "<< endl<<endl;
	Customer::heading();
	ptr ->Customer::println();	
}
Customer *maxWater(Customer cus[], int n){
	Customer *max = &cus[0];
	for(int i = 0; i<n; i++)
		if(cus[i].Water::average() > max->Water::average())  max = &cus[i];
	return max;
}
Customer *maxElect(Customer cus[], int n){
	Customer *max = &cus[0];
	for(int i = 0; i<n; i++)
		if(cus[i].Electricity::average() > max->Electricity::average())  max = &cus[i];
	return max;
}
Customer *maxPay(Customer cus[], int n){
	Customer *max = &cus[0];
	for(int i = 0; i<n; i++)
		if(cus[i].Customer::payment() > max->Customer::payment())  max = &cus[i];
	return max;
}