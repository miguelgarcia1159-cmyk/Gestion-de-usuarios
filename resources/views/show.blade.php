<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Usuario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
        }

        .info {
            margin-bottom: 20px;
        }

        .info strong {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .info span {
            font-size: 17px;
            color: #222;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            padding: 10px 16px;
            border-radius: 6px;
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Información del Usuario</h1>

    <div class="info">
        <strong>ID:</strong>
        <span>{{ $user->id }}</span>
    </div>

    <div class="info">
        <strong>Nombre:</strong>
        <span>{{ $user->name }}</span>
    </div>

    <div class="info">
        <strong>Correo electrónico:</strong>
        <span>{{ $user->email }}</span>
    </div>

    <div class="info">
        <strong>Rol:</strong>
        <span>{{ $user->role->nombre ?? 'Sin rol' }}</span>
    </div>

    <div class="info">
        <strong>Fecha de creación:</strong>
        <span>{{ $user->created_at->format('d/m/Y H:i') }}</span>
    </div>

    <div class="info">
        <strong>Última actualización:</strong>
        <span>{{ $user->updated_at->format('d/m/Y H:i') }}</span>
    </div>

    <div class="buttons">

        <a href="{{ route('users.edit', $user->id) }}"
           class="btn btn-primary">
            Editar
        </a>

        <a href="{{ route('users.index') }}"
           class="btn btn-secondary">
            Volver
        </a>

    </div>

</div>

</body>
</html>