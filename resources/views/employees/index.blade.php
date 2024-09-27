<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Filtros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/employees/styles.css') }}">
</head>
<body>
    <x-sidebar />
    <div class="table-container">
        <div class="filters">
            <div class="filter">
                <label for="all">
                    Todos
                </label>
                <input type="checkbox" id="all">
            </div>
            <div class="filter">
                <label for="name">
                    Nombre
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="name" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="id">
                    Identificación
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="id" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="address">
                    Dirección
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="address" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="phone">
                    Teléfono
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="phone" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="city">
                    Ciudad
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="city" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="department">
                    Pais
                    <div class="icon-container">
                        <i class="fas fa-sort-up"></i>
                        <i class="fas fa-sort-down"></i>
                    </div>
                </label>
                <div class="search-input">
                    <input type="text" id="department" placeholder="Buscar">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="filter">
                <label for="actions">
                    Acciones
                </label>
            </div>
        </div>

        <table class="user-table">
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_names }}</td>
                    <td>{{ $employee->identification }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->city_id }}</td>
                    <td>{{ $employee->boss_id }}</td>
                    <td>
                        <button class="edit-btn" onclick="location.href='{{ route('employees.edit', $employee->id) }}'"><i class="fas fa-pen"></i></button>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

