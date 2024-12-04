#include <iostream>
#include <string.h>
#include <conio.h>
#include <stdlib.h>
using namespace std;
int main(){
	string name;
	unsigned int qty;
	float price,total,save,pay,dis=20;
	cout<<"\tWelcome To Drink Store - today 20% off"<<endl;
	cout<<"\t______________________________________"<<endl;
	cout<<"\tEnter drink name : ";getline(cin,name);
	cout<<"\tEnter Qty(can)   : ";cin>>qty;fflush(stdin);
	cout<<"\tEnter Price($)   : ";cin>>price;fflush(stdin);
	cout<<"\t--------------------------------------"<<endl<<endl;
		total=qty*price;
		save =(total*dis)/100;
		pay  =total-save;
	cout<<"\tName     : "<<name<<endl;
	cout<<"\tQty      : "<<qty<<endl;
	cout<<"\tPrice    : "<<price<<endl;
	cout<<"\tTotal    : "<<total<<"$"<<endl;
	cout<<"\tDiscount : "<<dis<<"%"<<endl;
	cout<<"\tSave     : "<<save<<"$"<<endl;
	cout<<"\tPayment  : "<<pay<<"$"<<endl;
	getch();
	return 0;
}