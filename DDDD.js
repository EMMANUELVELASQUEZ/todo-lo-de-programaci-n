const fibonacci = n => Array.from({ length: n }, (_, i) => i < 2 ? i : fibonacci(i - 1) + fibonacci(i - 2));

const numeroTerminos = parseInt(prompt("Introduce el número de términos de la sucesión que deseas generar: "));
console.log("Sucesión de Fibonacci:", fibonacci(numeroTerminos));
