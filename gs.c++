#include <iostream>

int factorial(int n) {
    if (n == 0)
        return 1;
    else
        return n * factorial(n - 1);
}

int main() {
    int num;
    std::cout << "Ingrese un número: ";
    std::cin >> num;
    std::cout << "El factorial de " << num << " es: " << factorial(num) << std::endl;
    return 0;
}
