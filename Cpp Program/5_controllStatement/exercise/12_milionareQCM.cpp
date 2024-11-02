#include <iostream>
#include <conio.h>


using namespace std;
int main(){
	char an1,an2,an3;
	cout<< "\t________________________________"<<endl<<endl;
	cout<< "\t        Millionare - QA         "<< endl<<endl;
	cout<< "\t--------------------------------"<<endl;
	cout<< "\t=): Enter correct answer to get money!!!!"<<endl<< endl <<endl;
	getch();
	cout<< endl;
	cout<< "\tFirt Question: Price - 10$"<< endl;
	cout<< "\t-------------------------------------------------"<< endl;
	cout<< "\t    1. It has wing and can fly but it not a bird:"<< endl;
	cout<< "\t_________________________________________________"<< endl<< endl;
	cout<< "\ta.Dark"           << endl;
	cout<< "\tb.Chicken"        << endl;
	cout<< "\tc.Airplan"        << endl;
	cout<< "\td.Bee and airplan"<< endl; 
	cout<< "\t_________________________________________________"<< endl;
	cout<< "\tPlease enter correct answer: ";cin>>an1;
		if(an1 == 'd' ){
			cout<<endl<< "\t--------------------------------"<<endl;
				cout<< "\t      >> Corect answer!"<< endl<<endl;
			    cout<< "\t      >> YOU GET MONEY : 10$"<< endl;
			    cout<< "\t________________________________"<<endl;
		}
		else
		{
			cout<< endl<<"\t--------------------------------------------------------------"<<endl;
				cout<<"\t     >> Incorect answer! The answer is d.Bee and airplan"<< endl<<endl;
			   	cout<<"\t     >> YOU GET MONEY : 0$"<< endl;
				cout<<"\t______________________________________________________________"<<endl;
			 }
	getch();
//	cout<< endl<<endl;
//	cout<< "\tsecond Question: Price - 100$"<< endl;
//	cout<< "\t-------------------------------------------------"<< endl;
//	cout<< "\t    2. Which country will organize Sea game 2023\?"<< endl;
//	cout<< "\t_________________________________________________"<< endl<< endl;
//	cout<< "\ta.Cambodia" << endl;
//	cout<< "\tb.Veitnam"  << endl;
//	cout<< "\tc.Thailand" << endl; 
//	cout<< "\t_________________________________________________"<< endl;
//	cout<< "\tPlease enter correct answer: ";cin>>an1;
//		if(an1 == 'a' ){
//			    cout<<endl<< "\t--------------------------------"<<endl;
//				cout<< "\t      >> Corect answer!"<< endl<<endl;
//			    cout<< "\t      >> YOU GET MONEY : 100$"<< endl;
//			    cout<< "\t________________________________"<<endl;
//		}
//		else
//		{
//			cout<< endl<<"\t--------------------------------------------------------------"<<endl;
//				cout<<"\t     >> Incorect answer! The answer is a. Cambodia"<< endl<<endl;
//			   	cout<<"\t     >> YOU GET MONEY : 0$"<< endl;
//				cout<<"\t______________________________________________________________"<<endl;
//			 }
	getch();
}