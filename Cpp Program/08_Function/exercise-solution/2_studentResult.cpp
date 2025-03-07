#include <iostream>
using namespace std;

int id;
string name;
char sex;
float html;
float css;
float score;

void input();
void output();
float scores();

int main() {
    input();
    output();
    getch();
    return 0;
}

void input() {
    cout << "Enter Student Data" << endl;
    cout << "-----------------------------" << endl;
    cout << "Enter id : ";
    cin >> id;
    cout << "Enter name : ";
    cin >> name;
    cout << "Enter sex  : ";
    cin >> sex;
    cout << "Enter html score : ";
    cin >> html;
    cout << "Enter css score : ";
    cin >> css;
}
float scores() {
    score = (html + css) / 2;
    return score;
}
void output() {
    cout <<endl<< "Student Data" << endl;
    cout << "-----------------------------" << endl;
    cout << "Id    : " << id << endl;
    cout << "Name  : " << name << endl;
    cout << "Sex   : " << sex << endl;
    cout << "HTML  : " << html << endl;
    cout << "CSS   : " << css << endl;
    cout << "Score : " << scores() << endl;
}
