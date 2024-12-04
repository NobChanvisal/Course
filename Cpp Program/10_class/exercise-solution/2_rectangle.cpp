#include <iostream>
#include <conio.h>

using namespace std;
class Rectangle{
	private:
		int length;
		int width;
	public:
		void input(){//Function member
        cout<< "Enter value of Rectangle >>>"<<endl;
			cout<< "\tEnter length: ";cin>>length;
			cout<< "\tEnter widht : ";cin>>width;
			cout<< endl;
		}
		void output(){//Function member
			cout<<endl<< "\t"<<"length"<<"\t"<<"width"<<"\t"<<"area"<<"\t"<<"perimet"<<endl;
			cout<<endl<< "\t"<<length<<"\t"<<width<<"\t"<<area()<<"\t"<<perimet()<<endl;
		}
		float area(){//Function member
			return length*width;
		}
		float perimet(){
			return (length + width)*2;
		}
};
int main(){
	Rectangle r;
    r.input();
    r.output();
    getch();
    return 0;
}