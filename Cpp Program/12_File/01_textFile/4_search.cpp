#include <iostream>
#include <fstream>
using namespace std;

int number[100];
int count;
void insert();
void read();
void search();
int main(){
    
    int opt;
    do{
        cout<<endl;
        cout<< "1.insert\n2.view\n3.search\n4.exit"<<endl;
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
            search();
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
    fstream file("4_search.txt",ios::app);
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
    fstream file("4_search.txt",ios::in);

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
void search(){
    int snum;
    int find = 0;
    read();
    cout<<endl<<"Enter number to search : ";
    cin>>snum;
        for(int i = 0; i<count; i++){
            if(number[i] == snum){
                cout<<endl<< "Number found : "<<number[i];
                find = 1;
            }
        }
        if(find == 0){
            cout<<endl<< "number not found "<<endl;
        }
}