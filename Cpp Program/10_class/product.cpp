#include <iostream>
#include <conio.h>
#include <cstring>

using namespace std;

class Product{
	private:
		int code;
		string name;
		float price;
		int qty;
	public:
		void input(){
			cout<<endl;
			cout<< "Enter Code : ";cin>>code;
			cout<< "Enter Name : ";cin>>name;
			cout<< "Enter Price: ";cin>>price;
			cout<< "Enter QTY  : ";cin>>qty;
		}
		void output(){
			cout<<"code :"<<code<< endl;
			cout<<"name :"<<name<< endl;
			cout<<"price:"<<price<< endl;
			cout<<"qty  :"<<qty<< endl;
			cout<<"total:"<<totalPrice()<< endl;
		}
		float totalPrice(){
			return price * qty;
		}
		int getCode(){return code;}
};
Product p[100];
int student_cout = 0;
void inputAll(Product pr[], int n){
	for(int i = 0; i<n; i++){
		pr[i].input();
	}
}
void outputAll(Product pr[], int n){
	for(int i = 0; i<n; i++){
		cout<<endl<< "Product "<<i+1<<endl;
		pr[i].output();
	}
}
float totalSum(Product pr[], int n){
	float sum = 0;
	for(int i = 0; i<n; i++){
		sum += pr[i].totalPrice();
	}
	return sum;
}
void search(Product pr[], int n){
	int search;
	cout<< "Enter id to search : ";
	cin>>search;
	for(int i =0; i<n; i++){
		if(pr[i].getCode() == search){
			pr[i].output();
		}
	}
}
int main(){
	int n;
	int option;
	do
	{
	cout << "\n1. Input\n2. Output\n3. Search\n4. Update\n5. Delete\n6. Exit\n";
	cout << "Choose an option: ";
    cin >> option;
		switch (option)
		{
		case 1:
			cout<< "Enter element of product you want add : ";
			cin>>n;
			inputAll(p,n);
			break;
		case 2:
			outputAll(p,n);
			break;
		case 3:
			search(p,n);
			break;
		case 4:
			
			break;
		
		default:
			break;
		}
	} while ( option != 4);
	
	return 0;
}