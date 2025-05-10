function desplazarNumeros(arr, n) {
    const longitud = arr.length;
    const desplazamiento = n % longitud;
    return arr.slice(-desplazamiento).concat(arr.slice(0, longitud - desplazamiento));
}

// Ejemplo de uso:
const serieNumerica = [1, 2, 3, 4, 5];
const desplazamiento = 2;
const serieDesplazada = desplazarNumeros(serieNumerica, desplazamiento);
console.log(serieDesplazada); // Output: [4, 5, 1, 2, 3]
