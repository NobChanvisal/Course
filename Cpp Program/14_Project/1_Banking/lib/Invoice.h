#include <cstring>
#include <string>
class Invoice {
    public:
        int invoiceId;
        char invUsername[30];
        float deposit = 0;
        float withdraw = 0;
        char date[20];

        Invoice() {
            invoiceId = 0;
            strcpy(invUsername, "");  // Initialize with empty string
            deposit = 0;
            withdraw = 0;
            strcpy(date, "");
        }
        // Constructor to initialize the object
        Invoice(int id, const char *name, float depo, float withd, const char *d) {
            invoiceId = id;
            strcpy(invUsername, name);
            deposit = depo;
            withdraw = withd;
            strcpy(date,d);
        }

        // Function to print the invoice details
        void printInvoice() {
                cout << endl << "Invoice" << endl;
                cout << "---------------------" << endl;
                cout << "Invoice Id : " << invoiceId << endl;
                cout << "Username   : " << invUsername << endl;
            if (deposit != 0) {
                cout << "Deposit    : " << deposit << endl;
            }
            if (withdraw != 0) {
                cout << "Withdraw   : " << withdraw << endl;
            }
                cout << "Date       : " << date<<endl;
        }

        // Function to print the header
        void header() {
            cout <<endl<< left
                 << setw(15) << "Invoice-Id"
                 << setw(30) << "Username"
                 << setw(15) << "Deposit"
                 << setw(15) << "Withdraw"
                 << setw(15) << "Transaction-Date"<<endl;
            for(int i = 0; i<90; i++){
                cout<< "-";
            }
            cout<< endl;
        }

        // Function to display the invoice details in list format
        void displayList() {
            cout << left
                 << setw(15) << invoiceId 
                 << setw(30) << invUsername
                 << setw(15) << deposit
                 << setw(15) << withdraw 
                 << setw(15) << date<< endl;
        }
};