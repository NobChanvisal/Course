#include <iostream>
#include <fstream>
using namespace std;

int number[100];
int count;
void insert();
void read();
void update();
int main(){
    
    int opt;
    do{
        cout<<endl;
        cout<< "1.insert\n2.view\n3.update\n4.exit"<<endl;
        cout<< "Enter option[1-4] : ";
        cin>>opt;
        switch (opt)
        {
        case 1:
            insert();
            break;
        case 2:
            read();
            cout<<endl<< "View data"<<endl;
            for(int i = 0; i<count; i++){
                cout<<number[i]<<"\t";
            }
            break;
        case 3:
            update();
            break;
        case 4:
            break;
        default:
            cout<< "no option"<<endl;
            break;
        }
    }while(opt != 4);
}
void insert(){
    fstream file("5_update.txt",ios::app);
    if(file.fail()){
        cout<< "can't open file"<<endl;
        return;
    }
    cout<< "Enter number : ";
    cin>>number[count];

    //write to file
    file<<number[count]<< " ";
    count++;
    file.close();
}
void read(){
    fstream file("5_update.txt",ios::in);

    if(file.fail()){
        cout<< "can't open file"<<endl;
        return;
    }
    count = 0;
    while (file>>number[count])
    {
        count++;
    }  
}
void update(){
    int find = 0;
    int up;
    int newNum;
    read();
    fstream file("5_update.txt",ios::out);
    cout<< "Enter number to update : ";
    cin>>up;

    for(int i = 0; i<count; i++){
        if(number[i] == up){
            cout<< "number found : "<<endl;
            cout<< "Enter new number : ";
            cin>>newNum;
            number[i] = newNum;

            find = 1;
            break;
        }
    }
    for(int i = 0; i<count; i++){
                file<<number[i]<< " ";
           }
    file.close();
    if(find == 0){
        cout<< "Number not found !!"<<endl;
    }
}