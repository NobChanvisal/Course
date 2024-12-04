#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int month,year;

    cout<< "Find Day of Month"<<endl;
    cout<< "--------------------------"<<endl;
    cout<< "Enter Month : ";
    cin>>month;
    cout<< "Enter Year  : ";
    cin>>year;
    cout<< "---------------------------"<<endl;
    switch(month)
		{
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				cout<<"Number of Days 31.."<<endl;
				break;
			case 4:
			case 6:
			case 9:
			case 11:
				cout<<"Number of Days 30..";
				break;
			case 2:
				if(year % 4 == 0){
                    cout<<"Number of Days 29"<<endl;
                }
                else{
                    cout<<"Number of Days 28"<<endl;
                }
				break;
			default:
				cout<<"Invalid...Please Enter the 1 to 12..."<<endl;
				break;
		}
        getch();
        return 0;
}