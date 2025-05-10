#include <iostream>

int fibonacci(int n) {
    if (n <= 1)
        return n;
    else
        return fibonacci(n - 1) + fibonacci(n - 2);
}

int main() {
    int n;
    std::cout << "Ingrese el término de Fibonacci que desea calcular: ";
    std::cin >> n;
    std::cout << "El término " << n << " de Fibonacci es: " << fibonacci(n) << std::endl;
    return 0;
}
