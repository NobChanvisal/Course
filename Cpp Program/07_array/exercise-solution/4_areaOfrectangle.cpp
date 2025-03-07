#include <iostream>
#include <conio.h>

using namespace std;

int main(){
    float width[20], height[20], area[20];
    int n;
    
    cout << "Enter number of rectangles: ";
    cin >> n;

    // Input
    for(int i = 0; i < n; i++){
        cout <<endl<< "Rectangle " << i + 1 << endl;
        cout << "  Enter width  : ";
        cin >> width[i];
        cout << "  Enter height : ";
        cin >> height[i];
        area[i] = width[i] * height[i]; // Correct area calculation
    }

    // Output
    cout << endl << "Output Data Of Rectangles:" << endl;
    for(int i = 0; i < n; i++){
        cout <<endl<< "Rectangle " << i + 1 << endl;
        cout << "  Width  : " << width[i] << endl;
        cout << "  Height : " << height[i] << endl;
        cout << "  Area   : " << area[i] << endl; // Correct output for area
    }

    getch();
    return 0;
}
