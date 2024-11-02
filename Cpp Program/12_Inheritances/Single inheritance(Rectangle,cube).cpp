#include <iostream>
#include <conio.h>
#include <string>
#include <iomanip>

using namespace std;

class Rectangle{
	protected:
		float lenght;
		float width;
	public:
		Rectangle():lenght(1),width(1){};
		Rectangle(float l, float w);
		void input();
		void print();
		void println();
		float area();
		float perimeter();
		static void heading();
};
Rectangle::Rectangle(float l, float w):lenght(l),width(w){};
void Rectangle::input(){
	cout<< "\tEnter Lenght : ";cin>>lenght;
	cout<< "\tEnter Width  : ";cin>>width;
}
void Rectangle::print(){
	cout<< left;
	cout<< "\t";
	cout<< setw(10) << lenght;
	cout<< setw(10) << width;
	cout<< setw(10) << setprecision(4) << area();
	cout<< setw(10) << setprecision(4)<< perimeter();
}
void Rectangle::println(){ print(); cout << endl;}
float Rectangle::area(){	return lenght * width;}
float Rectangle::perimeter(){ return area() * 2;}
void Rectangle::heading(){
	cout<< left;
	cout<< "\t";
	cout<< setw(10) << "Lenght";
	cout<< setw(10) << "Width";
	cout<< setw(10) << "Area";
	cout<< setw(10) << "Perimeter"<< endl;
}
class Cube:public Rectangle{
	protected:
		float height;
	public:
		Cube(); 
		Cube(float l1, float w1, float h);
		void input();
		void print();
		void println();
		static void heading();
		float area();
		float volume();
};
Cube::Cube(): Rectangle(1,1),height(1){};
Cube::Cube(float l1, float w1, float h):Rectangle(l1,w1),height(h){};
void Cube::input(){
	Rectangle::input();
	cout << "\tEnter Height : ";cin>> height;
}
void Cube::print(){
	Rectangle::print();
	cout << left<< setw(10) << setprecision(4) << height;
	cout << left<< setw(10) << setprecision(4) << volume();
}
void Cube::println(){	print();cout<< endl; }
float Cube::area(){ return 2* (Rectangle::area() + height*(width + lenght));}
float Cube::volume(){ return Rectangle::area() * height;}
void Cube::heading(){
	cout<< left;
	cout<< "\t";
	cout<< setw(10) << "Lenght";
	cout<< setw(10) << "Width";
	cout<< setw(10) << "Area";
	cout<< setw(10) << "Perimeter";
	cout<< setw(10) << "Height";
	cout<< setw(10) << "Volume"<< endl;
	cout<< "\t-----------------------------------------------"<< endl;
}
void sortVolume(Cube cbs[], int n);
int main(){
	Cube cbs[5] = { Cube(1.5,2.5,3.5),
					Cube(1.4,2.8,3.7),
					Cube(5.5,8.5,1.2),
					Cube(5.1,2.4,1.5),
					Cube(1.5,2.5,3.5),};
	
	//out put of 5 defualt data of cubes:
	Cube::heading();
	for(int k = 0; k<5; k++){
		cbs[k].println();
	}
	//input valumes of Cube:
	int n = 0;
	do{
		cout<<endl<< "\t  Cube :"<< n + 1<<endl;
		cbs[n++].input();
		if(n >= 5) break;
		cout << "\tESC to stop!!"<<endl;
	}while(getch() != 27);
	//Output of Cube:
	cout << "\n\tHear are all Cube you input!!"<<endl<< endl;
	Cube::heading();
	for (int k = 0; k < n; k++) cbs[k].println();
	
	sortVolume(cbs,n);
	cout <<endl << endl<< "\tHere are " << n << " cube in ascending of volumes"<<endl<< endl;
	Cube::heading();
	for(int k = 0; k<n; k++){
		cbs[k].println();
	}	
	
}
void sortVolume(Cube cbs[], int n){
	Cube temp;
	for(int i = 0; i<n-1; i++)
		for(int j = i+1; j<n; j++)
			if(cbs[i].volume() > cbs[j].volume()){
				temp   = cbs[i];
				cbs[i] = cbs[j];
				cbs[j] = temp;
			}
}
