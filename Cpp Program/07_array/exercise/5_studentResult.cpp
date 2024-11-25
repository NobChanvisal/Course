#include<iostream>
#include<conio.h>
using namespace std;

int main(){
    int id[50];
    string name[50];
    char sex[50];
    float html[50],css[50],js[50];
    float score[50];
    char g[50];
    int n;

    cout<<endl<< "Enter numbers of student: ";
    cin>>n;
    cout<< "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<"<<endl;

    for(int i = 1; i<=n; i++){
        cout<<endl<< "Student " << i<< endl << endl;
        cout << "Enter Id   : ";
        cin >> id[i];
        cout << "Enter Name : ";
        cin >> name[i];
        cout << "Enter Sex  : ";
        cin >> sex[i];
        cout << "Enter Html  : ";
        cin >> html[i];
        cout << "Enter Css  : ";
        cin >> css[i];
        cout << "Enter Js  : ";
        cin >> js[i];
    }
    //caculate grade
    for(int i = 1; i<=n; i++){
        score[i] = (html[i] + css[i] + js[i])/3;
        if(score[i] >= 95){
            g[i] = 'A';
        }
        else if(score[i] > 85){
            g[i] = 'B';
        }
        else if(score[i] > 75){
            g[i] = 'C';
        }
        else if(score[i] > 60){
            g[i] = 'D';
        }
        else if(score[i] > 49)
        {
            g[i] = 'E';
        }
        else{
            g[i] = 'F';
        }
    }
    cout<<endl<<"Output Student data : "<<endl;
    for(int i = 1; i<=n; i++){
        cout<< "-------------------"<<endl;
        cout<<endl << "Student " << i << " :" << endl;
        cout << "Id     : " << id[i] << endl;
        cout << "Name   : " << name[i] << endl;
        cout << "Sex    : " << sex[i] << endl;
        cout << "Html   : " << html[i] << endl;
        cout << "Css    : " << css[i] << endl;
        cout << "Js     : " << js[i] << endl;
        cout << "Score  : " << score[i] << endl;
        cout << "Grade  : " << g[i] << endl;
    }
    getch();
    return 0;
}