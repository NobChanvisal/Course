#include <iostream>
#include <windows.h>
#include <chrono>
#include <thread>


using namespace std;
class Design
{
public:
        
    void delay(int milliseconds) {
        this_thread::sleep_for(chrono::milliseconds(milliseconds));  // Simulate delay in milliseconds
    }
    void loading(char bar = 219) {
        int i;
        system("cls");
        cout << "Loading..." << endl;
        for (i = 0; i < 50; i++) {
            cout << (char)bar << flush;
            delay(10);
        }
        
        delay(50);
        system("cls");
    }
    void setColor(int color) {
        HANDLE handle = GetStdHandle(STD_OUTPUT_HANDLE);  // Get handle to console output
        SetConsoleTextAttribute(handle, color);  // Set the color of the text
    }
};


