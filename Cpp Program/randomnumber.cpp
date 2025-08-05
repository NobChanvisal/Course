#include <iostream>
#include <cstdlib> // For rand() and srand()
#include <ctime>   // For time()

int main() {
    // Seed the random number generator with the current time
    srand(time(0));

    // Generate and print a random number between 0 and RAND_MAX
    int randomNumber = rand();
    

    // Generate and print a random number between 1 and 100
    int randomInRange =  (randomNumber % 100) + 1;
    std::cout << "Random number: " << randomNumber << std::endl;
    std::cout << "Random number (1-100): " << randomInRange << std::endl;

    return 0;
}