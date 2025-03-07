#include <iostream>

using namespace std;
// int main(){
//     // int num[2][3];//num[row][col]
//     int  test[2][3] = { {2, 4, 5}, {9, 0, 19}};


//     // for(int i = 0; i<2; i++){
//     //     cout<<endl;
//     //     for(int j = 0; j<3; j++){
//     //         cout<<test[i][j]<<"\t";
//     //     }
//     // }
// }


int main() {
    int numbers[2][3];

    cout << "Enter 6 numbers: " << endl;

    for (int i = 0; i < 2; ++i) {
        for (int j = 0; j < 3; ++j) {
            cin >> numbers[i][j];
        }
    }

    cout << "The numbers are: " << endl;

    for(int i = 0; i<2; i++){
        cout<<endl;
        for(int j = 0; j<3; j++){
            cout<<numbers[i][j]<<"\t";
        }
    }

    return 0;
}