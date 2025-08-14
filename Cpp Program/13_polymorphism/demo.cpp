#include <iostream>
using namespace std;
class Animals {
    public:
        virtual void sound() {
            cout<<"The animal have sound !!"<<endl;
        }
};
class Cat : public Animals{
    public:
        void sound() override{
            cout<<"The cat says : meaw meaw !!"<<endl;
        }
};
class Dog : public Animals{
    public: 
        void sound() override{
            cout<<"The dog says : wos wos !!"<<endl;
        }
};
int main(){
    Animals* dog = new Dog();
    dog->sound();

    Animals* cat = new Cat();
    cat->sound();
}