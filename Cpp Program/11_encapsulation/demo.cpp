#include <iostream>
#include <string>
using namespace std;
class Car {
    private:
        string model; // Encapsulated data
        int speed;

    public:
        Car(string model) {
            this->model = model;
            speed = 0; 
        }

        void accelerate() { // Method to modify speed
            speed += 10;
            cout<< model<< " accelerating. Current speed: "<< speed<<endl;
        }

        int getSpeed() { // Method to access speed
            return speed;
        }
};

int main() {
    Car myCar("Toyota");
    myCar.accelerate(); // Using method to change speed

    // myCar.speed = 20; // Attempting to modify encapsulated data directly (will cause an error)
    myCar.getSpeed(); // Accessing speed through a method
    cout<<"Current speed: " << myCar.getSpeed() << endl;
    return 0;
}