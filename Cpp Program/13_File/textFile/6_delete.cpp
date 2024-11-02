#include <iostream>
#include <fstream>

using namespace std;
int number[100];
int count = 0;
void insert();
void read();
void view();
void deletes();
int main(){
    int opt;

    do
    {
        cout<<endl<< "1.Insert\n2.View\n3.Delete\n4.Exit"<<endl;
        cout<< "-----------------"<<endl;
        cout<< "Enter option[1-4]: ";cin>>opt;
        switch (opt)
        {
        case 1:
            insert();
            break;
        case 2:
            view();
            break;
        case 3:
            deletes();
            break;
        case 4:
            
            break;
        default:
            break;
        }
    } while (opt != 4);
    
    return 0;
}


void insert(){
    fstream file("6_delete.txt",ios::app);

    cout<< "Enter number : ";
    cin>>number[count];
    
    file<<number[count]<< " ";
    count++;

    file.close();
}
void read(){
    fstream file("6_delete.txt",ios::in);

    if(file.fail()){
        cout<< "file not found "<<endl;
        return;
    }

    count = 0;
    while (file>>number[count])
    {
        count++;
    }
    file.close();
    
}
void view(){
    read();
    cout<< "View data :"<<endl;
    for(int i = 0; i<count; i++){
        cout<< number[i]<< " ";
    }
}
void deletes(){
    int deNum;
    int find = 0;
    read();
    fstream write("temp.txt",ios::app);

    cout<< "Enter number to delete : ";cin>>deNum;
    for(int i = 0; i<count; i++){
        if(number[i] != deNum){
            write<<number[i]<< " ";
            find = 0;
        }
        else{
            find = 1;
        }
    }
    write.close();
    
    if(find == 0){
        cout<< "number not found "<<endl;
        remove("temp.txt");
    }
    else{
        remove("6_delete.txt");
        rename("temp.txt", "6_delete.txt");
        cout<< "delete successfull"<<endl;
    }
}