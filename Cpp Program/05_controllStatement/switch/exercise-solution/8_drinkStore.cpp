#include <iostream>
#include <conio.h>
#include <windows.h>
#include <stdlib.h>

using namespace std;
int main(){
	unsigned int qty;
	double dis,save,total,pay;
	char menu;
	start:
	cout<< "\tDrink store new version                              "<< endl;
	cout<< "\t____________________________________________________ "<< endl<<endl;
	cout<< "\ta. Coca cola                2$/can                   "<< endl;
	cout<< "\tb. Fanta                    1.8$/can                 "<< endl;
	cout<< "\tc. Pepsi                    1.9$/can                 "<< endl;
	cout<< "\td. Sting red                2.5$/cann(5up - 10% of)  "<< endl;
	cout<< "\te. Exit                                              "<< endl;
	cout<< "\t---------------------------------------------------- "<< endl;
	cout<< "\tChose one op: ";cin>>menu;fflush(stdin);
	switch(menu){
		case'a': 
		case'A': 
				cout<< "\tEnter qty: ";cin>>qty;fflush(stdin);
				total = qty*2;
				dis = 0;
				break;
		case'b': 
				cout<< "\tEnter qty: ";cin>>qty;fflush(stdin);
				total = qty*1.8;
		        dis = 0;
		        break;
		case'c': cout<< "\tEnter qty: ";cin>>qty;fflush(stdin);
				total = qty*1.9;
				dis = 0;
				break;
		case'd': cout<< "\tEnter qty: ";cin>>qty;fflush(stdin);
				total = qty*2.5;
					if(qty >= 5){
						dis = 10;
					}
				break;
		case'e': return 0;
		default:
			cout<< "\tDon't have option=)";
			getch();
			system("cls");
			goto start;
	}
	save = total*(dis)/100;
	pay  = total - save;
	cout<< "\t____________________________"<<endl<<endl;
	cout<< "\tQty     : "<< qty  << endl;
	cout<< "\tTotal   : "<< total<< endl;
	cout<< "\tSave    : "<< save << endl;
	cout<< "\tPayment : "<< pay  << endl;
	getch();
	system("cls");
	goto start;
	getch();
}