#include <iostream>
#include <fstream>
#include <string>

int main() {
    std::ofstream archivo("ejemplo.txt");
    if (archivo.is_open()) {
        archivo << "¡Hola, Mundo!" << std::endl;
        archivo.close();
    }
    else
        std::cout << "No se pudo abrir el archivo" << std::endl;

    std::ifstream archivo_lectura("ejemplo.txt");
    std::string contenido;
    if (archivo_lectura.is_open()) {
        while (getline(archivo_lectura, contenido)) {
            std::cout << contenido << std::endl;
        }
        archivo_lectura.close();
    }
    else
        std::cout << "No se pudo abrir el archivo para lectura" << std::endl;

    return 0;
}
