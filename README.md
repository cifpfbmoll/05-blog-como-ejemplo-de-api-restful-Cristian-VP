[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/CwfLSOPe)
# API RESTful para Blog - CodeIgniter 4 + SQLite

> 📚 **Proyecto Educativo**: API REST completa para gestionar posts de un blog

## 🎯 Descripción del Proyecto

Este proyecto es una **API RESTful** construida con **CodeIgniter 4** y **SQLite** que implementa operaciones CRUD completas para gestionar posts de un blog. Incluye validación de datos, búsqueda, manejo de errores y documentación exhaustiva.

### ✨ Características

- ✅ CRUD completo (Create, Read, Update, Delete)
- ✅ Búsqueda de posts por término
- ✅ Validación de datos robusta
- ✅ Códigos de estado HTTP apropiados
- ✅ Respuestas JSON consistentes
- ✅ Base de datos SQLite (sin servidor)
- ✅ Migraciones de base de datos
- ✅ Documentación completa

## 📚 Documentación

Este proyecto incluye documentación exhaustiva:

- **[DOCUMENTACION_PROYECTO.md](DOCUMENTACION_PROYECTO.md)** - Guía completa paso a paso del desarrollo
- **[README_API.md](README_API.md)** - Referencia rápida de endpoints y uso
- **[POSTMAN_TESTS.md](POSTMAN_TESTS.md)** - Guía detallada de pruebas con Postman
- **[ESTRUCTURA_PROYECTO.md](ESTRUCTURA_PROYECTO.md)** - Explicación de la estructura y arquitectura

## 🚀 Inicio Rápido

### Requisitos Previos

- PHP 8.1 o superior
- Composer
- SQLite3 (generalmente incluido en PHP)

### Instalación

1. **Las dependencias ya están instaladas**, pero si necesitas reinstalar:
   ```bash
   composer install
   ```

2. **La base de datos ya está configurada** en `.env` para usar SQLite

3. **Ejecutar migraciones** (si aún no se han ejecutado):
   ```bash
   php spark migrate
   ```

4. **Iniciar el servidor de desarrollo**:
   ```bash
   php spark serve
   ```

5. **Acceder a la API**:
   ```
   http://localhost:8080
   ```

### Prueba Rápida

```bash
# Crear un post
curl -X POST http://localhost:8080/posts \
  -H "Content-Type: application/json" \
  -d '{
    "title": "Mi Primer Post",
    "content": "Este es el contenido del post",
    "category": "Tecnología",
    "tags": ["php", "api"]
  }'

# Listar todos los posts
curl http://localhost:8080/posts
```

O ejecuta el script de pruebas:
```bash
./test_api.sh
```

## 📋 Endpoints de la API

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/posts` | Listar todos los posts |
| GET | `/posts/{id}` | Obtener un post específico |
| POST | `/posts` | Crear un nuevo post |
| PUT | `/posts/{id}` | Actualizar un post |
| DELETE | `/posts/{id}` | Eliminar un post |
| GET | `/posts/search?term={palabra}` | Buscar posts |

Ver **[README_API.md](README_API.md)** para ejemplos detallados.

## 🗂️ Estructura del Proyecto

```
api-blog/
├── app/
│   ├── Controllers/
│   │   └── Posts.php          # Controlador de la API
│   ├── Models/
│   │   └── PostModel.php      # Modelo de datos
│   ├── Database/
│   │   └── Migrations/        # Migraciones de BD
│   └── Config/
│       └── Routes.php         # Rutas de la API
├── writable/
│   └── database/
│       └── blog.db            # Base de datos SQLite
└── public/
    └── index.php              # Punto de entrada
```

## 🧪 Pruebas

### Con cURL
```bash
./test_api.sh
```

### Con Postman

**Opción 1: Importar Colección (Recomendado)**
1. Importa `Blog_API_Postman_Collection.json` en Postman
2. Incluye 17 pruebas con tests automáticos
3. Ver guía: **[IMPORTAR_POSTMAN.md](IMPORTAR_POSTMAN.md)**

**Opción 2: Pruebas Manuales**
Consulta **[POSTMAN_TESTS.md](POSTMAN_TESTS.md)** para una guía completa de pruebas manuales.

## 🎓 Conceptos Aprendidos

Este proyecto enseña:
- ✅ Patrón MVC con CodeIgniter 4
- ✅ Diseño de APIs RESTful
- ✅ Migraciones de base de datos
- ✅ Validación de datos
- ✅ Manejo de errores HTTP
- ✅ SQLite como base de datos
- ✅ Seguridad (Mass Assignment Protection)

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
