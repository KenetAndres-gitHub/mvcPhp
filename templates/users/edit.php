<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"],
        .button {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        .button:hover {
            background-color: #45a049;
        }

        .button-secondary {
            background-color: #ccc;
            margin-top: 10px;
        }

        .button-secondary:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="/pruebas/save"  name="user" method="POST">
            <h2><?php echo $title; ?> Usuario</h2>
            <input type="hidden"  name="id" value="<?php echo $data['id'];?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $data['first_name'];?>">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" value="<?php echo $data['last_name'];?>">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" value="<?php echo $data['age'];?>">
            <input type="submit" value="Guardar">
        </form>
        <br>
        <a href="/pruebas/users"  style="padding: 10px;" class="button button-secondary">Volver</a>
    </div>
</body>
</html>
