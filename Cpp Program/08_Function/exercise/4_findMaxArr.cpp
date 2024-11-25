
#include <iostream>
#include<conio.h>
using namespace std;

int findLargestElement(int arr[], int n) {
    int max = arr[0]; 
    for (int i = 1; i < n; i++) {
        if (arr[i] > max) {
            max = arr[i]; 
    }
    }
    return max;
}

int main() {
    int n;
    cout << "Enter the number of elements in the array: ";
    cin >> n;

    int arr[n]; 

    cout << "Enter the elements of the array:\n";
    for (int i = 0; i < n; i++) {
        cout<<"Enter arr-"<<i+1<< " : ";
        cin >> arr[i];
    }

    int largest = findLargestElement(arr, n);
    cout << "The max value in the array is: " << largest << endl;
    getch();
    return 0;
}
