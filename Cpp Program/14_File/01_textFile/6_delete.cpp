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
void deletes() {
    int deNum;
    bool found = false; // Flag to check if the number is found
    read(); // Assuming `read()` initializes the array `number` and its size `count`

    fstream write("temp.txt", ios::out); // Open temp file in write mode
    if (!write) {
        cout << "Error opening temp.txt for writing." << endl;
        return;
    }

    cout << "Enter number to delete: ";
    cin >> deNum;

    for (int i = 0; i < count; i++) {
        if (number[i] != deNum) {
            write << number[i] << " ";
        } else {
            found = true; // Mark that the number was found
        }
    }
    write.close();

    if (!found) {
        cout << "Number not found." << endl;
        remove("temp.txt"); // Remove temp file if no changes were made
    } else {
        remove("6_delete.txt"); // Delete the old file
        rename("temp.txt", "6_delete.txt"); // Rename temp to the original file
        cout << "Delete successful." << endl;
    }
}
