#include <iostream>
#include <cstdlib> // Needed for rand() and srand()
#include <ctime>   // Needed for time()
using namespace std;

int main() {
  // Get a different random number each time the program runs
  int number;
  float money;
  float moneyBalance = 1000;
  srand(time(0));
  
  // Generate a random number between 0 and 10
  int randomNum = rand() % 11;
  

  
  int opt;
  do
  {
    if(moneyBalance < 0){
        cout<<"You don't have money !!"<<endl;
    }
    else{
        cout<<"enter number to play : ";
        cin>>number;
        cout<<"enter money to play : ";
        cin>>money;
        
        if(number == randomNum){
            cout<<"You win get "<<money<<endl;
            moneyBalance = moneyBalance + money; 
        }
        else{
            cout<<"Your loss "<<money<<endl;
            moneyBalance = moneyBalance - money;
        }
        cout<<"Your money balance : "<<moneyBalance<<endl;

        cout<<"Do you want to play again ?[0.stop , 1. Play] : ";
        cin>>opt;
    }
  } while (opt != 0);
   
  return 0;
}



