#include "./module.h"
#include <cstdlib> // Add this to use system()
#include <conio.h>
int countMovie = 0;
Movie movie[100];
void insert_movie();
void view_all_movies();
void view_seats(); 


int main() {
    int choice;

    do {
        system("cls");  // Clear the screen (Windows)
        cout << "--- Movie Management System ---\n";
        cout << "1. Insert a new movie\n";
        cout << "2. View all movies\n";
        cout << "3. View seats for a movie\n";
        cout << "4. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        system("cls");  // Optional: Clear before each action output

        switch (choice) {
            case 1:
                insert_movie();
                break;
            case 2:
                view_all_movies();
                break;
            case 3:
                view_seats();
                break;
            case 4:
                cout << "Exiting program. Goodbye!\n";
                break;
            default:
                cout << "Invalid choice. Please try again.\n\n";
                break;
        }

        if (choice != 4) {
            cout << "\nPress any key to continue...";
            cin.ignore();
            cin.get();
        }

    } while (choice != 4);

    return 0;
}

void insert_movie()
{

    cout << "\n--- Inserting New Movie ---"<<endl;
    movie[countMovie].insertMovie();
    countMovie++;
}
void view_all_movies()
{
    for (int i = 0; i < countMovie; i++)
    {
        movie[i].display();
    }
    
    char option;
    cout << "\nPress [y] to view seats, [e] for menu --> ";
    cin.ignore();
    cin.get();

    if (option == 'y' || option == 'Y') {
        view_seats();
    }
   
   
}

void view_seats()
{
    int id;
    cout << "\n--- View Seats ---\n";
    cout << "Enter Movie ID to view seats: ";
    cin >> id;

    // Find the movie with the given ID
    for (int i = 0; i < countMovie; i++)
    {
        if (movie[i].id == id) {
            movie[i].display_seats();
            return;
        }
    }
    cout << "Movie with ID " << id << " not found.\n\n";
    view_all_movies();
}
