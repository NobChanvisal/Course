#include <iostream>
#include <iomanip>
#include <string.h>

using namespace std;

// Class declarations
class Movie {
public:
    int id;
    char title[50];
    char showdate[20];
    float duration;
    double price;
    char seats[5][5];
   
    void insertMovie(){
        
        cout << "Enter ID: ";
        cin >> id;
        cin.ignore(); 
        cout << "Enter Title: ";
        cin.getline(title, 50);
        cout << "Enter Show Date: ";
        cin.getline(showdate, 20);
        cout << "Enter Duration (in hours): ";
        cin >> duration;
        cout << "Enter Price: ";
        cin >> price;
        for (int i = 0; i < 5; i++)
        {
            for ( int j = 0; j < 5; j++)
            {
                seats[i][j] = 'O';
            }
            
        }
    }
    void header() {
        cout<<left
            <<setw(5)<<"id"
            <<setw(30)<< "title"
            <<setw(15)<<"duration"
            <<setw(10)<<"price"
            <<setw(20)<<"showdate"<<endl;
            cout<<"--------------------------------------------------"<<endl;
        
    }
    void display() {
        cout<<left
            <<setw(5)<<id
            <<setw(30)<< title
            <<setw(15)<<duration
            <<setw(10)<<price
            <<setw(20)<<showdate<<endl;
        
    }
    void display_seats() const {
        cout << "\n--- Available Seats for " << title << " ---\n";
        cout << "   ";
        for (int j = 0; j < 5; ++j) {
            cout << setw(2) << j + 1 << " ";
        }
        cout << "\n----------------------------------\n";
        for (int i = 0; i < 5; i++) {
            cout << (char)('A' + i) << " |";
            for (int j = 0; j < 5; ++j) {
                cout << setw(2) << seats[i][j] << " ";
            }
            cout << endl;
        }
        cout << "----------------------------------\n";
        cout << "'O' = Available | 'X' = Taken\n\n";
    }
};

class User {
public:
    int id;
    char username[20];
    char password[20];
};

class Invoice {
public:
    int invoiceId;
    int userId;
    int movieId;
    char seatNumber[10];
    double totalPrice;
    char bookingDate[20];
};
