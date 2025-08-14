#include <iostream>
#include <fstream>
#include <cstring>
#include <ctime>
#include <conio.h> // for getch()
using namespace std;

class Movie {
public:
    int movieId;
    char title[50];
    int availableSeats;
    float price;
};

class User {
public:
    int userId;
    char username[50];
    char password[50];
};

class Invoice {
public:
    int invId;
    int userId;
    int movieId;
    float price;
    int seat;
    char bookingDate[20];
};

// ---------------- Movie Functions ----------------

void addMovie() {
    Movie m;
    cout << "Enter Movie ID: ";
    cin >> m.movieId;
    cin.ignore();
    cout << "Enter Title: ";
    cin.getline(m.title, 50);
    cout << "Enter Available Seats: ";
    cin >> m.availableSeats;
    cout << "Enter Ticket Price: ";
    cin >> m.price;

    ofstream out("movieList.bin", ios::binary | ios::app);
    out.write((char*)&m, sizeof(m));
    out.close();
    cout << "Movie added successfully.\n";
}

void showMovieList() {
    Movie m;
    ifstream in("movieList.bin", ios::binary);
    cout << "\n--- Movie List ---\n";
    while (in.read((char*)&m, sizeof(m))) {
        cout << "ID: " << m.movieId
             << ", Title: " << m.title
             << ", Seats: " << m.availableSeats
             << ", Price: $" << m.price << endl;
    }
    in.close();
}

void editMovie() {
    int id;
    cout << "Enter Movie ID to edit: ";
    cin >> id;

    fstream file("movieList.bin", ios::binary | ios::in | ios::out);
    Movie m;
    bool found = false;
    streampos pos;
    while (file.read((char*)&m, sizeof(m))) {
        if (m.movieId == id) {
            found = true;
            pos = file.tellg() - sizeof(m);
            break;
        }
    }

    if (!found) {
        cout << "Movie not found.\n";
        file.close();
        return;
    }

    cout << "Editing movie: " << m.title << endl;
    cin.ignore();
    cout << "Enter New Title: ";
    cin.getline(m.title, 50);
    cout << "Enter New Seats: ";
    cin >> m.availableSeats;
    cout << "Enter New Price: ";
    cin >> m.price;

    file.seekp(pos);
    file.write((char*)&m, sizeof(m));
    file.close();
    cout << "Movie updated.\n";
}

void deleteMovie() {
    int id;
    cout << "Enter Movie ID to delete: ";
    cin >> id;

    ifstream in("movieList.bin", ios::binary);
    ofstream out("temp.bin", ios::binary);
    Movie m;
    bool deleted = false;

    while (in.read((char*)&m, sizeof(m))) {
        if (m.movieId == id) {
            deleted = true;
            continue;
        }
        out.write((char*)&m, sizeof(m));
    }

    in.close();
    out.close();
    remove("movieList.bin");
    rename("temp.bin", "movieList.bin");

    if (deleted)
        cout << "Movie deleted.\n";
    else
        cout << "Movie not found.\n";
}

// ---------------- User Functions ----------------

void registerUser() {
    User u;
    cout << "Enter User ID: ";
    cin >> u.userId;
    cin.ignore();
    cout << "Enter Username: ";
    cin.getline(u.username, 50);
    cout << "Enter Password: ";
    char ch;
    int i = 0;
    while ((ch = getch()) != '\r') {
        u.password[i++] = ch;
        cout << '*';
    }
    u.password[i] = '\0';

    ofstream out("user_account.bin", ios::binary | ios::app);
    out.write((char*)&u, sizeof(u));
    out.close();
    cout << "\nRegistered successfully!\n";
}

bool login(int& userId) {
    char username[50], password[50];
    cout << "Username: ";
    cin >> username;
    cout << "Password: ";
    int i = 0;
    char ch;
    while ((ch = getch()) != '\r') {
        password[i++] = ch;
        cout << '*';
    }
    password[i] = '\0';

    User u;
    ifstream in("user_account.bin", ios::binary);
    while (in.read((char*)&u, sizeof(u))) {
        if (strcmp(u.username, username) == 0 && strcmp(u.password, password) == 0) {
            userId = u.userId;
            cout << "\nLogin successful!\n";
            in.close();
            return true;
        }
    }
    in.close();
    cout << "\nLogin failed.\n";
    return false;
}

// ---------------- Ticket Functions ----------------

void bookTicket(int userId) {
    int movieId;
    showMovieList();
    cout << "Enter Movie ID to book: ";
    cin >> movieId;

    fstream file("movieList.bin", ios::binary | ios::in | ios::out);
    Movie m;
    bool found = false;
    streampos pos;
    while (file.read((char*)&m, sizeof(m))) {
        if (m.movieId == movieId) {
            found = true;
            pos = file.tellg() - sizeof(m);
            break;
        }
    }

    if (!found) {
        cout << "Movie not found.\n";
        file.close();
        return;
    }

    int seat;
    cout << "Available Seats: " << m.availableSeats << "\nEnter number of seats to book: ";
    cin >> seat;
    if (seat > m.availableSeats) {
        cout << "Not enough seats.\n";
        file.close();
        return;
    }

    // Create invoice
    Invoice inv;
    inv.invId = rand() % 10000 + 1;
    inv.userId = userId;
    inv.movieId = m.movieId;
    inv.price = m.price;
    inv.seat = seat;

    time_t now = time(0);
    strftime(inv.bookingDate, sizeof(inv.bookingDate), "%Y-%m-%d", localtime(&now));

    ofstream out("invoice.bin", ios::binary | ios::app);
    out.write((char*)&inv, sizeof(inv));
    out.close();

    // Update movie seat
    m.availableSeats -= seat;
    file.seekp(pos);
    file.write((char*)&m, sizeof(m));
    file.close();

    cout << "Ticket booked successfully!\n";
}

void showMyTickets(int userId) {
    Invoice inv;
    ifstream in("invoice.bin", ios::binary);
    bool found = false;
    cout << "\n--- My Tickets ---\n";
    while (in.read((char*)&inv, sizeof(inv))) {
        if (inv.userId == userId) {
            found = true;
            cout << "Invoice ID: " << inv.invId
                 << ", Movie ID: " << inv.movieId
                 << ", Seats: " << inv.seat
                 << ", Price: $" << inv.price
                 << ", Date: " << inv.bookingDate << endl;
        }
    }
    if (!found) cout << "No bookings found.\n";
    in.close();
}

void showAllInvoices() {
    Invoice inv;
    ifstream in("invoice.bin", ios::binary);
    cout << "\n--- All Bookings ---\n";
    while (in.read((char*)&inv, sizeof(inv))) {
        cout << "Invoice ID: " << inv.invId
             << ", User ID: " << inv.userId
             << ", Movie ID: " << inv.movieId
             << ", Seats: " << inv.seat
             << ", Price: $" << inv.price
             << ", Date: " << inv.bookingDate << endl;
    }
    in.close();
}

// ---------------- Main Menu ----------------

int main() {
    int choice;
    while (true) {
        cout << "\n\n--- Movie Ticket Booking System ---\n";
        cout << "1. Admin Menu\n2. User Menu\n3. Exit\nEnter choice: ";
        cin >> choice;
        if (choice == 1) {
            int adminPass;
            cout << "Enter admin password: ";
            cin >> adminPass;
            if (adminPass == 1234) {
                int adminChoice;
                while (true) {
                    cout << "\n--- Admin Menu ---\n";
                    cout << "1. Add Movie\n2. Edit Movie\n3. Delete Movie\n4. Show Movie List\n5. Show Invoices\n6. Back\nChoice: ";
                    cin >> adminChoice;
                    switch (adminChoice) {
                        case 1: addMovie(); break;
                        case 2: editMovie(); break;
                        case 3: deleteMovie(); break;
                        case 4: showMovieList(); break;
                        case 5: showAllInvoices(); break;
                        case 6: goto endAdmin;
                    }
                }
                endAdmin:;
            } else {
                cout << "Wrong admin password!\n";
            }
        } else if (choice == 2) {
            int userChoice;
            while (true) {
                cout << "\n--- User Menu ---\n";
                cout << "1. Login\n2. Register\n3. Back\nChoice: ";
                cin >> userChoice;
                if (userChoice == 1) {
                    int userId;
                    if (login(userId)) {
                        int opt;
                        while (true) {
                            cout << "\n--- User Dashboard ---\n";
                            cout << "1. Show Movies\n2. Book Ticket\n3. Show My Tickets\n4. Logout\nChoice: ";
                            cin >> opt;
                            switch (opt) {
                                case 1: showMovieList(); break;
                                case 2: bookTicket(userId); break;
                                case 3: showMyTickets(userId); break;
                                case 4: goto endUser;
                            }
                        }
                        endUser:;
                    }
                } else if (userChoice == 2) {
                    registerUser();
                } else {
                    break;
                }
            }
        } else {
            break;
        }
    }
    return 0;
}
