#include <iostream>
#include <string>
#include <iomanip>
#include <conio.h>

using namespace std;  

int matchIDs[10];
string homeTeams[10];
string awayTeams[10];
string matchDates[10];
int availableTickets[10];
float price[10];
float total[10];


int ticketIDs[50];
int ticketMatchIDs[50];
string buyerNames[50];
int ticketqtySale[50];
float ticketPriceSale[50];
float ticketTotal[50];
int qtySale;
int matchCount = 0;
int ticketCount = 0;

void addMatch() {
    if (matchCount < 10) {
        cout << "Enter Match ID: ";
        cin >> matchIDs[matchCount];
        cout << "Enter Home Team: ";
        cin >> homeTeams[matchCount];
        cout << "Enter Away Team: ";
        cin >> awayTeams[matchCount];
        cout << "Enter Match Date (DD-MM-YYYY): ";
        cin >> matchDates[matchCount];
        cout<<  "Enter Ticket Price($) : ";
        cin>>price[matchCount];
        cout << "Enter Number of Available Tickets: ";
        cin >> availableTickets[matchCount];

        matchCount++;
    } else {
        cout << "Cannot add more matches.\n";
    }
}

void header(){
    cout<<left;
    cout<<setw(10)<<"Mathc ID"
        <<setw(35)<<"Match"
        <<setw(15)<<"Date"
        <<setw(15)<<"Price"
        <<setw(10)<<"Ticket Qty"<<endl;
        for(int i = 0; i<80; i++){
            cout<< "-";
        }
        cout<<endl;
}
void viewMatches() {
    cout<<endl<<"--------------------------"<<endl;
    cout      <<" Available Matches:\n";
    cout      <<"--------------------------"<<endl;
    header();
    for (int i = 0; i < matchCount; i++) {
        cout <<setw(10)<< matchIDs[i] 
             <<setw(35)<< homeTeams[i] + " vs " + awayTeams[i]
             <<setw(15)<< matchDates[i] 
             <<setw(15)<< price[i]
             <<setw(10) << availableTickets[i] << endl;
    }
    for(int i = 0; i<80; i++){
            cout<< "-";
        }
        cout<<endl;
}

void bookTicket(int matchID, string buyerName) {
    for (int i = 0; i < matchCount; i++) {
        if (matchIDs[i] == matchID && availableTickets[i] > 0) {
            cout<<endl<< "Enter qty of tackit : ";
            cin>>qtySale;
            if(availableTickets[i] > qtySale){
                availableTickets[i] -= qtySale;
                total[i] = qtySale * price[i];
                ticketIDs[ticketCount] = ticketCount + 1;
                ticketMatchIDs[ticketCount] = matchID;
                buyerNames[ticketCount] = buyerName;
                ticketPriceSale[ticketCount] = price[i];
                ticketqtySale[ticketCount] = qtySale;
                ticketTotal[ticketCount] = total[i];
                ticketCount++;
                cout << "Ticket booked successfully! Ticket ID: " << ticketCount << "\n";
                return;
            }
            else{
                cout<< "Tackit don't have qty you want !!!"<<endl;
            }
        }
    }
    cout << "Booking failed. Either the match ID is incorrect or no tickets are available.\n";
}

void viewTickets() {
    cout<<endl << "----------------------"<<endl;
    cout << "Booked Tickets:\n";
    cout << "----------------------"<<endl<<endl;
    cout     <<setw(15)<< "Ticket ID"
             <<setw(15)<< "Match ID"
             <<setw(35)<< "BuyerName"
             <<setw(10)<< "Price"
             <<setw(10)<< "Qty"
             <<setw(10)<< "Total"<<endl;
    for(int i = 0; i<110; i++){
        cout<< "-";
    }cout<<endl;
    for (int i = 0; i < ticketCount; i++) {
        cout <<setw(15)<< ticketIDs[i] 
             <<setw(15)<< ticketMatchIDs[i]
             <<setw(35)<< buyerNames[i] 
             <<setw(10)<< ticketPriceSale[i]
             <<setw(10)<< ticketqtySale[i]
             <<setw(10)<< ticketTotal[i]<<endl;
    }
    for(int i = 0; i<110; i++){
        cout<< "-";
    }cout<<endl<<endl;
}

int main() {
    int choice, matchID;
    string buyerName;
        cout << "-----------------------------------------"<<endl;
        cout << "             WELCOME TO                  "<<endl;
        cout << "   Football Ticket Booking System "<<endl;
        cout << "-----------------------------------------"<<endl;
    while (true) {
        cout << "-----------------------------------------"<<endl;
        cout << "1. Add Match\n2. View Matches\n3. Booking Ticket\n4. View Tickets\n5. Exit\n";
        cout << "-----------------------------------------"<<endl;
        cout << "Enter an option: ";
        cin >> choice;

        switch (choice) {
            case 1:
                addMatch();
                break;
            case 2:
                viewMatches();
                break;
            case 3:
                cout << "Enter Match ID: ";
                cin >> matchID;
                cout << "Enter Buyer Name: ";
                cin >> buyerName;
                bookTicket(matchID, buyerName);
                break;
            case 4:
                viewTickets();
                break;
            case 5:
                return 0;
            default:
                cout << "Invalid choice. Please try again.\n";
        }
    }
	getch();
    return 0;
}
