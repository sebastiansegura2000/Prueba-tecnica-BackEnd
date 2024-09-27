
### README 2: Documentación de la API

```markdown
# Documentación de la API

Esta es la documentación de las APIs disponibles en el proyecto de gestión de empleados. Puedes probar estas APIs utilizando Postman.

## Autenticación

No se requiere autenticación para acceder a las APIs.

## Endpoints

### Countries

- **GET /api/countries**
  - Obtiene una lista de todos los países.
  
- **POST /api/countries**
  - Crea un nuevo país.
  - **Body:**
    ```json
    {
      "name": "Nombre del país"
    }
    ```

- **PUT /api/countries/{country}**
  - Actualiza un país existente.
  - **Body:**
    ```json
    {
      "name": "Nuevo nombre"
    }
    ```

- **DELETE /api/countries/{country}**
  - Elimina un país.

### Cities

- **GET /api/cities**
  - Obtiene una lista de todas las ciudades.

- **POST /api/cities**
  - Crea una nueva ciudad.
  - **Body:**
    ```json
    {
      "name": "Nombre de la ciudad",
      "country_id": "ID del país"
    }
    ```

- **PUT /api/cities/{city}**
  - Actualiza una ciudad existente.
  - **Body:**
    ```json
    {
      "name": "Nuevo nombre"
    }
    ```

- **DELETE /api/cities/{city}**
  - Elimina una ciudad.

### Charges

- **GET /api/charges**
  - Obtiene una lista de todos los cargos.

- **POST /api/charges**
  - Crea un nuevo cargo.
  - **Body:**
    ```json
    {
      "name_charge": "Nombre del cargo"
    }
    ```

- **PUT /api/charges/{charge}**
  - Actualiza un cargo existente.
  - **Body:**
    ```json
    {
      "name_charge": "Nuevo nombre"
    }
    ```

- **DELETE /api/charges/{charge}**
  - Elimina un cargo.

### Employees

- **GET /api/employees**
  - Obtiene una lista de todos los empleados.

- **POST /api/employees**
  - Crea un nuevo empleado.
  - **Body:**
    ```json
    {
      "names": "Nombre",
      "last_names": "Apellidos",
      "identification": "ID",
      "address": "Dirección",
      "phone_number": "Número de teléfono",
      "city_id": "ID de la ciudad",
      "boss_id": "ID del jefe (opcional)",
      "charge_ids": [ "ID del cargo 1", "ID del cargo 2" ]
    }
    ```

- **GET /api/employees/{id}**
  - Obtiene información de un empleado específico.

- **PUT /api/employees/{id}**
  - Actualiza un empleado existente.
  - **Body:**
    ```json
    {
      "names": "Nuevo nombre",
      // Otros campos que deseas actualizar
    }
    ```

- **DELETE /api/employees/{id}**
  - Elimina un empleado.

## Pruebas

Puedes probar los endpoints utilizando Postman. Asegúrate de seleccionar el método correcto y de enviar los datos en el cuerpo de la solicitud si es necesario.

