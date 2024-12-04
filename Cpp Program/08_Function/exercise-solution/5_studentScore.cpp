#include <iostream>
#include <conio.h>
using namespace std;

void input();
void output();
void calculateGrades();

int id[100];
string name[100];
char sex[100], grade[100];
float html[100], css[100], js[100], score[100];

int stuCount = 0;

int main() {
    int opt;
    do {
    	cout<< "1.input\t2.View"<<endl;
        cout << "Enter option [1-3] : ";
        cin >> opt;
        switch (opt) {
            case 1:
                input();
                break;
            case 2:
                output();
                break;
            default:
                break;
        }
    } while (opt != 3);
	getch();
    return 0;
}

void input() {
    cout << "Input Data Of Student" << endl;
    cout << "-------------------------------" << endl;
    cout << "Enter id : ";
    cin >> id[stuCount];
    cout << "Enter name : ";
    cin >> name[stuCount];
    cout << "Enter sex  : ";
    cin >> sex[stuCount];
    cout << "Enter html score : ";
    cin >> html[stuCount];
    cout << "Enter css score : ";
    cin >> css[stuCount];
    cout << "Enter js score : ";
    cin >> js[stuCount];
    stuCount++;
    cout << "-------------------------------" << endl;
}

void calculateGrades() {
    for (int i = 0; i < stuCount; i++) {
        score[i] = (html[i] + css[i] + js[i]) / 3;
        if (score[i] >= 95) {
            grade[i] = 'A';
        } else if (score[i] >= 85) {
            grade[i] = 'B';
        } else if (score[i] >= 75) {
            grade[i] = 'C';
        } else if (score[i] >= 60) {
            grade[i] = 'D';
        } else if (score[i] >= 50) {
            grade[i] = 'E';
        } else {
            grade[i] = 'F';
        }
    }
}

void output() {
    calculateGrades();  // Ensure grades are calculated before displaying
    cout << endl << "Output Data Of Student " << endl;
    cout << "-------------------------------" << endl;
    for (int i = 0; i < stuCount; i++) {
        cout << "Id   : " << id[i] << endl;
        cout << "Name : " << name[i] << endl;
        cout << "Sex  : " << sex[i] << endl;
        cout << "HTML : " << html[i] << endl;
        cout << "CSS  : " << css[i] << endl;
        cout << "JS   : " << js[i] << endl;
        cout << "Score: " << score[i] << endl;
        cout << "Grade: " << grade[i] << endl;
        cout << "-------------------------------" << endl;
    }
}
