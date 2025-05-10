const FILAS = 8;
const COLUMNAS = 8;
const MINAS = 10;
let tablero = [];
let minas = [];
let juegoTerminado = false;

function iniciarJuego() {
    juegoTerminado = false;
    tablero = [];
    minas = [];
    generarTablero();
    colocarMinas();
    actualizarTablero();
}

function generarTablero() {
    const tableroHTML = document.getElementById('tablero');
    tableroHTML.innerHTML = '';
    for (let i = 0; i < FILAS; i++) {
        tablero[i] = [];
        minas[i] = [];
        for (let j = 0; j < COLUMNAS; j++) {
            const casilla = document.createElement('div');
            casilla.classList.add('casilla');
            casilla.onclick = () => seleccionarCasilla(i, j);
            tableroHTML.appendChild(casilla);
            tablero[i][j] = casilla;
            minas[i][j] = false;
        }
    }
}

function colocarMinas() {
    let colocadas = 0;
    while (colocadas < MINAS) {
        const fila = Math.floor(Math.random() * FILAS);
        const columna = Math.floor(Math.random() * COLUMNAS);
        if (!minas[fila][columna]) {
            minas[fila][columna] = true;
            colocadas++;
        }
    }
}

function seleccionarCasilla(fila, columna) {
    if (juegoTerminado || tablero[fila][columna].classList.contains('descubierto')) return;
    if (minas[fila][columna]) {
        tablero[fila][columna].classList.add('bomba');
        tablero[fila][columna].textContent = '💣';
        finalizarJuego(false);
    } else {
        descubrir(fila, columna);
        if (verificarVictoria()) finalizarJuego(true);
    }
}

function descubrir(fila, columna) {
    if (fila < 0 || fila >= FILAS || columna < 0 || columna >= COLUMNAS || tablero[fila][columna].classList.contains('descubierto')) return;
    
    tablero[fila][columna].classList.add('descubierto');
    const minasCercanas = contarMinasCercanas(fila, columna);
    if (minasCercanas > 0) {
        tablero[fila][columna].textContent = minasCercanas;
        tablero[fila][columna].classList.add('numero');
    } else {
        for (let i = -1; i <= 1; i++) {
            for (let j = -1; j <= 1; j++) {
                descubrir(fila + i, columna + j);
            }
        }
    }
}

function contarMinasCercanas(fila, columna) {
    let cuenta = 0;
    for (let i = -1; i <= 1; i++) {
        for (let j = -1; j <= 1; j++) {
            const nuevaFila = fila + i;
            const nuevaColumna = columna + j;
            if (nuevaFila >= 0 && nuevaFila < FILAS && nuevaColumna >= 0 && nuevaColumna < COLUMNAS && minas[nuevaFila][nuevaColumna]) {
                cuenta++;
            }
        }
    }
    return cuenta;
}

function verificarVictoria() {
    for (let i = 0; i < FILAS; i++) {
        for (let j = 0; j < COLUMNAS; j++) {
            if (!minas[i][j] && !tablero[i][j].classList.contains('descubierto')) {
                return false;
            }
        }
    }
    return true;
}

function finalizarJuego(ganado) {
    juegoTerminado = true;
    if (ganado) {
        alert("¡Felicidades! Has ganado.");
    } else {
        alert("¡Boom! Has perdido.");
        mostrarMinas();
    }
}

function mostrarMinas() {
    for (let i = 0; i < FILAS; i++) {
        for (let j = 0; j < COLUMNAS; j++) {
            if (minas[i][j]) {
                tablero[i][j].classList.add('bomba');
                tablero[i][j].textContent = '💣';
            }
        }
    }
}

function reiniciarJuego() {
    iniciarJuego();
}

window.onload = iniciarJuego;
