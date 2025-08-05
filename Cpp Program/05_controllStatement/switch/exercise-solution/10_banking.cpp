#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int no,opt,s;
    string name;
    float balance,dep, w;
    do
    {
        cout<<"\nBanking menu"<<endl;
        cout<<"---------------------------------"<<endl;
        cout<<"1. Insert account"<<endl;
        cout<<"2. View account"<<endl;
        cout<<"3. Deposit"<<endl;
        cout<<"4. Withdraw"<<endl;
        cout<<"5. Exit"<<endl;
        cout<<"--------------------"<<endl;
        cout<<"enter option[1-5] : ";
        cin>>opt;

        switch (opt)
        {
        case 1:
            cout<<"enter account_no : ";
            cin>>no;
            cout<<"enter name       : ";
            cin>>name;
            cout<<"enter money balance : ";
            cin>>balance;
            break;
        case 2 :
            if (no)
            {
                cout<<"enter account_no to view : ";
                cin>>s;
                if (no == s)
                {
                    cout<<"\n---------------------------------"<<endl;
                    cout<<"Your current money balance : "<<balance<<endl;
                    cout<<"---------------------------------"<<endl;
                }
                else{
                    cout<<"account not found !!"<<endl;
                }
            }
            else{
                cout<<"You don't have account !! please register. "<<endl;
            }
            break;
        case 3 :
            if (no)
            {
                cout<<"enter account_no to deposit : ";
                cin>>s;
                if (no == s)
                {
                    cout<<"enter money to deposit : ";
                    cin>>dep;
                    balance += dep;

                    cout<<"deposit money successfull !!"<<endl;
                }
                else{
                    cout<<"account not found !!"<<endl;
                }
            }
            else{
                cout<<"You don't have account !! please register. "<<endl;

            }
            break;
        case 4 :
            if (no)
            {
                cout<<"enter account_no to withdraw : ";
                cin>>s;
                if (no == s)
                {
                    cout<<"enter money to withdraw : ";
                    cin>>w;
                    if (balance >= w)
                    {
                        balance -= w;
                        cout<<"withdraw money successfull !!"<<endl;
                    }
                    else{
                        cout<<"enought money !!"<<endl;
                    }  
                }
                else{
                    cout<<"account not found !!"<<endl;
                }
            }
            else{
                cout<<"You don't have account !! please register. "<<endl;
            }
            break;
        default:
            cout<<"No option !!"<<endl;
            break;
        }
    } while (
        opt != 5
    );
    getch();
    return 0;
}