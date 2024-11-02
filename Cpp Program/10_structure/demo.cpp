#include <iostream>
#include <string>

using namespace std;

struct Student {
    string id;
    string name;
    char sex;
    float math, eng, kh;
    float avg;
};

int main() {
    int n;
    cout << "Input n: ";
    cin >> n;

    Student stu[20];

    for (int i = 0; i < n; i++) {
        cout << "Input id  : "; cin>>stu[i].id;
        cout << "Input name: "; cin>>stu[i].name;
        cout << "Input sex : "; cin >> stu[i].sex;
        cout << "Input math: "; cin >> stu[i].math;
        cout << "Input eng : "; cin >> stu[i].eng;
        cout << "Input kh  : "; cin >> stu[i].kh;
        cout << endl;
    }

    for (int i = 0; i < n; i++) {
        stu[i].avg = (stu[i].math + stu[i].eng + stu[i].kh) / 3;
    }

    cout << "Output Array" << endl;
    for (int i = 0; i < n; i++) {
        cout << stu[i].id << " " << stu[i].name << " " << stu[i].sex << " "
             << stu[i].math << " " << stu[i].eng << " " << stu[i].kh << " "
             << stu[i].avg << endl;
    }

    return 0;
}
