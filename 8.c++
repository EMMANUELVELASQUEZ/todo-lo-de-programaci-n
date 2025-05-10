#include <iostream>

int main() {
    int num = 10;
    int *ptr = &num;

    std::cout << "Valor de num: " << num << std::endl;
    std::cout << "Dirección de memoria de num: " << &num << std::endl;
    std::cout << "Valor apuntado por el puntero: " << *ptr << std::endl;
    std::cout << "Dirección de memoria almacenada en el puntero: " << ptr << std::endl;
    return 0;
}
