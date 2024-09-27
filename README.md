# Proyecto de Gestión de Empleados en Laravel

Este proyecto está desarrollado en Laravel 8 y utiliza una base de datos SQLite para gestionar información de empleados, ciudades, países y cargos.

## Requisitos Previos

- PHP 7.3 o superior
- Composer
- Laravel 8
- SQLite

## Configuración del Entorno

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/sebastiansegura2000/Prueba-tecnica-BackEnd.git
   cd [NOMBRE_DEL_REPOSITORIO]

2. **Instala las dependencias de Composer**
   ```bash
   composer install

3. **Configura el archivo .env: Copia el archivo .env.example a .env y configura la base de datos:**
   ```bash
    DB_CONNECTION=sqlite
    DB_DATABASE=ruta

4. **Ejecuta las migraciones y los seeders: Para crear las tablas y cargar los datos iniciales, ejecuta:**
   ```bash
    php artisan migrate:refresh --seed

5. **Inicia el servidor de desarrollo:**
   ```bash
    php artisan serve



