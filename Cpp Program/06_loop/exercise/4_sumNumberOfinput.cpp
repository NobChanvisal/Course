#include <iostream>  

using namespace std;  
int main() {
    int number;  
    int sum = 0;  
    cout << "Input integers number[enter 0 to stop]: \n";
    while (1) {  // This creates an infinite loop because the condition 1 is always true
        cout << "Input a number: ";
        cin >> number;  
        if (number == 0) {
            break;  // Exit the loop if the user enters 0
        }
        if (number > 0) {
            sum += number;  
        }
    }
    cout << "Sum of positive integers: " << sum << endl;

    return 0;
}
