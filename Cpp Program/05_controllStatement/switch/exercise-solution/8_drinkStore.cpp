#include <iostream>
#include <conio.h>
#include <windows.h>
#include <stdlib.h>

using namespace std;
int main(){
	unsigned int qty,count;
	double dis,save,total,pay;
	string promote;
	char menu;
	char an;
	start:
	count = 0;
	cout<< "\tDrink store new version                              "<< endl;
	cout<< "\t_________________________________________________"<< endl<<endl;
	cout<< "\ta. Coca cola            2$/can                   "<< endl;
	cout<< "\tb. Fanta                1.8$/can                 "<< endl;
	cout<< "\tc. Pepsi                1.9$/can                 "<< endl;
	cout<< "\td. Sting red            2.5$/can(5up - 10%% off)  "<< endl;
	cout<< "\te. Carabao              1.5$/can(Get 5% With promote code Prossart)"<< endl;
	cout<< "\tf. Exit"<<endl;
	cout<< "\t-------------------------------------------------"<< endl;
	cout<< "\tChose one option: ";cin>>menu;fflush(stdin);
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
		case'e': 
				cout<< "\tEnter qty: ";cin>>qty;fflush(stdin);
				cout<< "\tDo you have promot code[y/n] : ";
				cin>>an;	
				if (an == 'y')
				{
					promotecode:
					cout<<"\tenter promote code : ";
					cin>>promote;
					if (promote == "Prossart")
					{
						dis = 5;
					}
					else{
						cout<<"\tYou promote code not correct !!"<<endl;
						count++;
						getchar();
						if (count < 3)
						{
							goto promotecode;
						}
						else{
							cout<<"\tYou can input 3 time !! try it next time !! thank you"<<endl;
							dis = 0;
						}
						
					}
					
				}
				else{
					dis = 0;
				}
				total = qty*2.5;
					
				break;
		case'f': return 0;
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