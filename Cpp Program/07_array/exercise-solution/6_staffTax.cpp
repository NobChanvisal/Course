// -	បើប្រាក់ខែ (salary) លើស 500 គិតពន្ធ 5% នៃប្រាក់ខែ
// -	បើប្រាក់ខែ (salary) ចន្លោះពី 300 ដល់ 500 គិតពន្ធ 4% នៃប្រាក់ខែ
// -	បើប្រាក់ខែ (salary) ចន្លោះពី 250 ដល់ 300 គិតពន្ធ 3% នៃប្រាក់ខែ
// -	បើប្រាក់ខែ (salary) តិចជាង 250 គិតពន្ធ 2% នៃប្រាក់ខែ
#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int id[50];
    string name[50];
    char sex[50];
    float salary[50], tax[50], total[50];
    int n;

    cout << "Enter number of employees: ";
    cin >> n;

    // Input
    for(int i = 0; i < n; i++){
        cout <<endl<< "Employee " << i + 1 << endl;
        cout << "Enter ID      : ";
        cin >> id[i];
        cout << "Enter Name    : ";
        cin >> name[i];
        cout << "Enter Sex[M/F]: ";
        cin >> sex[i];
        cout << "Enter Salary  : ";
        cin >> salary[i];
    }
    for(int i = 0; i<n; i++){
        if(salary[i] > 500){
            tax[i] = salary[i] * 0.05;
        }
        else if(salary[i] > 300){
            tax[i] = salary[i] * 0.04;
        }
        else if(salary[i] > 250){
            tax[i] = salary[i] * 0.03;
        }
        else{
            tax[i] = salary[i] * 0.02;
        }
        total[i] = salary[i] - tax[i];
    }
    // Output
    cout << endl << "Output Data of Employees: " << endl;
    cout << "--------------------------" << endl;
    for(int i = 0; i < n; i++){
        cout << "Employee " << i + 1 << endl;
        cout << "ID      : " << id[i] << endl;
        cout << "Name    : " << name[i] << endl;
        cout << "Sex     : " << sex[i] << endl;
        cout << "Salary  : " << salary[i] << endl;
        cout << "Tax     : " << tax[i] << endl;
        cout << "Total   : " << total[i] << endl;
        cout << "--------------------------" << endl;
    }

    getch();
    return 0;
}
