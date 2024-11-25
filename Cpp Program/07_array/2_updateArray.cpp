#include <iostream>
#include <conio.h>

using namespace std;

int main() {
    int arr[50];
    int n, search, newValue;
    cout << "Enter number of elements in array: ";
    cin >> n;
    // Input
    for(int i = 0; i < n; i++) {
        cout << "Enter value of arr-" << i + 1 << " : ";
        cin >> arr[i];
    }
    // Output array before update
    cout << "Output array before update:" << endl;
    for(int i = 0; i < n; i++) {
        cout << arr[i] << "\t";
    }

    //update
    cout<<endl << "Enter value to update : ";
    cin >> search;

    int found = 0;  
    for(int i = 0; i < n; i++) {
        if(arr[i] == search) {
            cout << "Enter new value: ";
            cin >> newValue;
            arr[i] = newValue; 
            found = 1;  
            break; 
        }
    }
    if(found == 0) {  
        cout << "Value not found!!" << endl;
    }

    // Output array after update
    cout<<endl << "Output array after update:" << endl;
    for(int i = 0; i < n; i++) {
        cout << arr[i] << "\t";
    }
    cout << endl;

    getch();
    return 0;
}
