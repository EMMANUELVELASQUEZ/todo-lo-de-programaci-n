CREATE TABLE Clientes (
    IDCliente INT PRIMARY KEY,
    NombreCliente VARCHAR(50)
);

CREATE TABLE Pedidos (
    IDPedido INT PRIMARY KEY,
    IDCliente INT,
    NombreProducto VARCHAR(50),
    Cantidad INT,
    FOREIGN KEY (IDCliente) REFERENCES Clientes(IDCliente)
);

INSERT INTO Clientes (IDCliente, NombreCliente) VALUES (1, 'Juan');
INSERT INTO Clientes (IDCliente, NombreCliente) VALUES (2, 'María');

INSERT INTO Pedidos (IDPedido, IDCliente, NombreProducto, Cantidad) VALUES (101, 1, 'Camiseta', 2);
INSERT INTO Pedidos (IDPedido, IDCliente, NombreProducto, Cantidad) VALUES (102, 1, 'Pantalón', 1);
INSERT INTO Pedidos (IDPedido, IDCliente, NombreProducto, Cantidad) VALUES (103, 2, 'Zapatos', 1);

SELECT Clientes.NombreCliente, Pedidos.NombreProducto, Pedidos.Cantidad
FROM Clientes
JOIN Pedidos ON Clientes.IDCliente = Pedidos.IDCliente;
