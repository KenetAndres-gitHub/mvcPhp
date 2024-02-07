<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table>
        <thead >
            <tr style="font-size: 20px;">
                <th><a href="/pruebas/add" style="color: #ddd;">+</a></th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($listUsers)!=0){ ?>
            <?php foreach ($listUsers as $user): ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $user['first_name']; ?></td>
                    <td><?php echo $user['last_name']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                    <td>
                        <a href="/pruebas/users/edit/<?php echo $user['id'];?>">Editar</a> 
                        <a href="/pruebas/users/remove/<?php echo $user['id'];?>">Eliminar</a> 
                    </td>
                </tr>
            <?php $count++; ?>
            <?php endforeach; ?>
            <?php }else{ ?>
                <p>No hay Datos para mostrar</p>
            <?php }?>

        </tbody>
    </table>
</body>
</html>
