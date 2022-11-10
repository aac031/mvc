<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Inventario de Productos</h1>
    <table>
        <?php
        // <?= es igual a php echo
        foreach ($products as $item) : ?>
            <tr>
                <td>Identificador: <?= $item[0] ?> </td>
                <td>Descripción: <?= $item[1] ?> </td>
                <td><a href="?method=show&&id=<?= $item[0] ?>">Ver detalle</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>