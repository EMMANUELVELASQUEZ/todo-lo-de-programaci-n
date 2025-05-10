<?php

try {
    // Conexión a la base de datos SQLite
    $db = new PDO('sqlite:mi_base_de_datos.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para obtener los nombres de clientes y los nombres de productos que han ordenado
    $query = "
        SELECT Clientes.NombreCliente, Pedidos.NombreProducto, Pedidos.Cantidad
        FROM Clientes
        JOIN Pedidos ON Clientes.IDCliente = Pedidos.IDCliente
    ";

    // Ejecutar la consulta y obtener los resultados
    $stmt = $db->query($query);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Imprimir los resultados
    foreach ($resultados as $fila) {
        echo "Nombre Cliente: " . $fila['NombreCliente'] . ", ";
        echo "Nombre Producto: " . $fila['NombreProducto'] . ", ";
        echo "Cantidad: " . $fila['Cantidad'] . "<br>";
    }

    // Cerrar la conexión a la base de datos
    $db = null;
} catch(PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}

?>
