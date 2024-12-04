#include <iostream>
#include <iomanip>
#include <conio.h>
using namespace std;
int main() {
    double dollars, riels, baht;

    cout << "Enter the amount in US dollars: ";
    cin >> dollars;

    // Convert to riels and baht
    riels = dollars * 4100;
    baht = dollars * 30;

    // Output the results
    
    cout << dollars << " USD = " << riels << " KHR" << endl;
    cout << dollars << " USD = " << baht << " THB" << endl;
    getch();
    return 0;
}
