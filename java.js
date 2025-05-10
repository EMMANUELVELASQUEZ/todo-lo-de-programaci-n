let currentPlayer = "X";
let board = [
    ["", "", ""],
    ["", "", ""],
    ["", "", ""]
];

function handleClick(row, col) {
    if (board[row][col] === "" && !checkWinner()) {
        board[row][col] = currentPlayer;
        renderBoard();
        if (!checkWinner()) {
            currentPlayer = currentPlayer === "X" ? "O" : "X";
        }
    }
}

function checkWinner() {
    // Check rows
    for (let i = 0; i < 3; i++) {
        if (board[i][0] !== "" && board[i][0] === board[i][1] && board[i][1] === board[i][2]) {
            alert(`${board[i][0]} wins!`);
            return true;
        }
    }
    // Check columns
    for (let i = 0; i < 3; i++) {
        if (board[0][i] !== "" && board[0][i] === board[1][i] && board[1][i] === board[2][i]) {
            alert(`${board[0][i]} wins!`);
            return true;
        }
    }
    // Check diagonals
    if (board[0][0] !== "" && board[0][0] === board[1][1] && board[1][1] === board[2][2]) {
        alert(`${board[0][0]} wins!`);
        return true;
    }
    if (board[0][2] !== "" && board[0][2] === board[1][1] && board[1][1] === board[2][0]) {
        alert(`${board[0][2]} wins!`);
        return true;
    }
    // Check for tie
    if (!board.flat().includes("")) {
        alert("It's a tie!");
        return true;
    }
    return false;
}

function renderBoard() {
    let cells = document.querySelectorAll(".cell");
    cells.forEach((cell, index) => {
        let row = Math.floor(index / 3);
        let col = index % 3;
        cell.textContent = board[row][col];
    });
}
