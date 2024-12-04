#include <iostream>
#include <conio.h>

using namespace std;
class Point{
	private:
		int x;
		int y;
	public:
		Point():x(0),y(0){}//(x= 0,y = 0);
		Point(int a,int b):x(a),y(b){}
		void input(){
			cout << "\tEnter x : ";cin>>x;
			cout << "\tEnter y : ";cin>>y;	
		}
		void output(){
			cout<< "\t("<< x<< ","<< y<< ")"<< endl;
		}	
};
class Circle:private Point{
	private:
		int r;
	public:
		Circle(): Point(),r(1){}
		Circle(int x1, int y1, float r1):Point(x1,y1),r(r1){}
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
	Circle c2, c1(35,60,20);
	cout << "\tData of circle c1: "<< endl;
	cout << "\t--------------------------------------"<< endl;
	c1.output();
	cout <<endl<< "\tEnter Data of Circle c2: "<< endl;
	cout << "\t--------------------------------------"<< endl;
	c2.input();
	cout <<endl<< "\tData of Circle c2: "<< endl;
	cout << "\t--------------------------------------"<< endl;
	c2.output();
	getch();
}