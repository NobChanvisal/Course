#include <iostream>
#include <conio.h>

using namespace std;
class Point{
	private:
		int x;
		int y;
	public:
	
		void input(){
			cout << "\tEnter x : ";cin>>x;
			cout << "\tEnter y : ";cin>>y;	
		}
		void output(){
			cout<< "\t("<< x<< ","<< y<< ")"<< endl;
		}	
};
class Circle:public Point{
	private:
		int r;
	public:
		void input(){
			Point::input();
			cout << "\tEnter Radius : ";cin>>r;
		}
		void output(){
			Point::output();
			cout << "\tRadius         : "<< r << endl;
			cout << "\tArea of Circle : "<< area()<< endl;
		}
		float area(){
			return 3.14 * r*r;
		}
};
int main(){
	Circle c;
	cout <<endl<< "\tEnter Data of Circle circle: "<< endl;
	cout << "\t--------------------------------------"<< endl;
	c.input();
	cout <<endl<< "\tData of Circle: "<< endl;
	cout << "\t--------------------------------------"<< endl;
	c.output();

	getch();
}