#include <iostream>
#include <string>

class Persona {
    public:
        std::string nombre;
        int edad;
};

int main() {
    Persona persona1;
    persona1.nombre = "Juan";
    persona1.edad = 30;
    std::cout << "Nombre: " << persona1.nombre << ", Edad: " << persona1.edad << std::endl;
    return 0;
}
