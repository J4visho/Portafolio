<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
    <div style="margin-bottom: 105px;">
        @extends('cruds.plantillas.barraNav')
    </div>
    <div class="container mt-5 " >
      
        <div class="row ">
            <div class="col-md-12">
                <h1>Crear una lista de tareas</h1>
                <a href="{{ route('cruds.create') }}" class="btn btn-primary mb-3">Crear lista</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cruds as $crud)
                            <tr>
                                <td>{{ $crud->id }}</td>
                                <td>{{ $crud->title }}</td>
                                <td>
                                    <a href="{{ route('cruds.show', $crud->id) }}" class="btn btn-info">Mostrar</a>
                                    <a href="{{ route('cruds.edit', $crud->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('cruds.destroy', $crud->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
