#include <iostream>
#include <string>

class Animal {
    public:
        void comer() {
            std::cout << "El animal come" << std::endl;
        }
};

class Perro : public Animal {
    public:
        void ladrar() {
            std::cout << "El perro ladra" << std::endl;
        }
};

int main() {
    Perro miPerro;
    miPerro.comer();
    miPerro.ladrar();
    return 0;
}
