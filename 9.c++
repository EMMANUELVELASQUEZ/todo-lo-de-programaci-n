#include <iostream>

int main() {
    try {
        int num = 10;
        int divisor = 0;
        if (divisor == 0) {
            throw "División por cero";
        }
        int resultado = num / divisor;
        std::cout << "Resultado: " << resultado << std::endl;
    }
    catch (const char* mensaje) {
        std::cerr << "Error: " << mensaje << std::endl;
    }
    return 0;
}
