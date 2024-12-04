#include "D:\RUPP\Teaching\Cpp Teaching\8.class\exercise\schoolManage\TeacherMenu.h"
#include "D:\RUPP\Teaching\Cpp Teaching\8.class\exercise\schoolManage\StudentMenu.h"
int main(){
    TeacherMenu teaMenu;
    StudentMenu stuMenu;
    int opt;
    do {
        cout << "\n1. Manage Teacher\n2. Manage Student\n3. Exit"<<endl;
        cout << "Choose an option: ";
        cin >> opt;
        switch (opt) {
            case 1:
                teaMenu.menu(); 
                break;
            case 2:
                stuMenu.menu();
                break;
            case 3:
                return 0;
            default:
                cout << "Invalid option! Please choose again.\n";
        }
    } while (opt != 3);
    getch();
    return 0;
}
