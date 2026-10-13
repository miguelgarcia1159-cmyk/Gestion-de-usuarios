<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario - CUCEA</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .data {
            margin-bottom: 18px;
        }

        .label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        .value {
            font-size: 17px;
            color: #222;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            padding: 11px 18px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #1976d2;
        }

        .btn-secondary {
            background-color: #6c757d;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Detalles del usuario</h1>

        <div class="data">
            <div class="label">ID:</div>
            <div class="value">
                {{ $user->id }}
            </div>
        </div>

        <div class="data">
            <div class="label">Nombre:</div>
            <div class="value">
                {{ $user->name }}
            </div>
        </div>

        <div class="data">
            <div class="label">Correo electrónico:</div>
            <div class="value">
                {{ $user->email }}
            </div>
        </div>

        <div class="data">
            <div class="label">Rol:</div>
            <div class="value">
                {{ $user->role->nombre }}
            </div>
        </div>

        <div class="buttons">

            <a href="{{ route('users.edit', $user) }}"
               class="btn btn-primary">
                Editar usuario
            </a>

            <a href="{{ route('users.index') }}"
               class="btn btn-secondary">
                Regresar
            </a>

        </div>

    </div>

</div>

</body>
</html>