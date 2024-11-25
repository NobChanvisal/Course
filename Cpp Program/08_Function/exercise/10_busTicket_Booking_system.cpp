#include <iostream>
#include <iomanip>
#include <conio.h>
#include "D:\\RUPP\\Teaching\\Cpp Teaching\\8_Function\\exercise\\menu.h"
using namespace std;

int count = 0; // Initialize count
int search;

class busData {
public:
    int busNo;
    string driverName, from, to;
    string arrivalTime, departureTime;
    string chair[10];

    busData() {
        for (int i = 0; i < 10; i++) {
            chair[i] = "Empty";
        }
    }

    void insertBus();
    void bookingTicket();
    void view();
    void available();
};

busData buses[50]; // Array to store bus data

void insertBus() {
    cout << endl << "---------------------" << endl;
    cout << " Add Bus " << endl;
    cout << "---------------------" << endl;
    cout << "Enter BusNo          : ";
    cin >> buses[count].busNo;
    cout << "Enter Driver's name  : ";
    cin >> buses[count].driverName;
    cout << "Enter Departure Time : ";
    cin >> buses[count].departureTime;
    cout << "Arrival Time         : ";
    cin >> buses[count].arrivalTime;
    cout << "From                 : ";
    cin >> buses[count].from;
    cout << "To                   : ";
    cin >> buses[count].to;
    count++;
}

void available() {
    cout << endl << "---------------------" << endl;
    cout << " Bus available " << endl;
    cout << "---------------------" << endl;
    for (int i = 0; i < count; i++) {
        cout << left;
        cout << "------------------------------------------------" << endl;
        cout << "Bus No : " << setw(20) << buses[i].busNo << endl;
        cout << "Driver : " << setw(20) << buses[i].driverName;
        cout << setw(20) << "Arrival Time : " << setw(8) << buses[i].arrivalTime;
        cout << setw(20) << "Departure Time : " << setw(8) << buses[i].departureTime << endl;
        cout << "From   : " << setw(20) << buses[i].from << setw(20) << "To : " << setw(8) << buses[i].to;
        cout << endl << "-------------------------------------------------" << endl << endl;
    }
}

void view() {
    cout << "Enter bus no : ";
    cin >> search;
    for (int i = 0; i < count; i++) {
        if (buses[i].busNo == search) {
            cout << "Bus No: " << buses[i].busNo << endl;
            cout << "Driver Name: " << buses[i].driverName << endl;
            cout << "Departure Time: " << buses[i].departureTime << endl;
            cout << "Arrival Time: " << buses[i].arrivalTime << endl;
            cout << "From: " << buses[i].from << " To: " << buses[i].to << endl;

            cout << "Seat availability:" << endl;
            for (int j = 0; j < 10; j++) {
                cout << "Seat " << (j + 1) << ": " << buses[i].chair[j] << endl;
            }
            break;
        }
    }
}

int main() {
    Menu mainMenus;
    do {
        mainMenus.title = " C++ Bus Ticket Booking System ";
        mainMenus.menus[0] = "[1]. Insert Bus    ";
        mainMenus.menus[1] = "[2]. View          ";
        mainMenus.menus[2] = "[3]. Bus Available ";
        mainMenus.menus[3] = "[4]. Booking Ticket";
        mainMenus.menus[4] = "[5]. Exit          ";
        mainMenus.numberOfMenu = 5;
        mainMenus.display();

        if (mainMenus.selectedMenu == 1) {
            insertBus();
            cout << endl << "----> Press any key to go to the menu !!!" << endl;
            getch();
            system("cls");
        } else if (mainMenus.selectedMenu == 2) {
            view();
            cout << endl << "----> Press any key to go to the menu !!!" << endl;
            getch();
            system("cls");
        } else if (mainMenus.selectedMenu == 3) {
            available();
            cout << endl << "----> Press any key to go to the menu !!!" << endl;
            getch();
            system("cls");
        }
    } while (mainMenus.selectedMenu != 5);
}
