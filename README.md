<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Caso de Estudio BACKEND (LARAVEL)

Creación de un backend con LARAVEL + Mysql (Version 1.0)

Incluye:
- User
- Hardware
- Reports
- Clients


## RUTAS API REST

USER RUTAS

- POST https://tudominio.com/v1/insertUsers
- GET  https://tudominio.com/v1/showUsers
- PUT  https://tudominio.com/v1/updateUsers/{id}
- DELETE https://tudominio.com/v1/deleteUsers/{id}

AUTH RUTAS
- POST https://tudominio.com/v1/auth/login
- POST https://tudominio.com/v1/auth/register

AÑADIR AL HEADER token=CODIGO JWT
- POST https://tudominio.com/v1/auth/logout
- POST https://tudominio.com/v1/auth/refresh
- POST https://tudominio.com/v1/auth/me


CLIENTS RUTAS

- POST https://tudominio.com/v1/insertClients
- GET  https://tudominio.com/v1/showClients
- PUT  https://tudominio.com/v1/updateClients/{id}
- DELETE  https://tudominio.com/v1/deleteClients/{id}


HARDWARE RUTAS

- POST https://tudominio.com/v1/insertHardware
- GET  https://tudominio.com/v1/showHardware
- PUT  https://tudominio.com/v1/updateHardware/{id}
- DELETE  https://tudominio.com/v1/deleteHardware/{id}

REPORTS RUTAS

- POST https://tudominio.com/v1/insertReports
- GET  https://tudominio.com/v1/showReports
- PUT  https://tudominio.com/v1/updateReports/{id}
- DELETE  https://tudominio.com/v1/deleteReports/{id}

## Documentacion + Instalación

Enlace de la documentacion del api https://www.postman.com/teamecortespa/workspace/api-tecnicos-v1/ POSTMAN

Pasos a seguir:
- Clone repositorio
- Tener disponible xampp o wampp con apache 
- Crear base de datos y ajustar el archivo .ENV
- Generar Key JWT php artisan jwt:secret
- Añadir JWT_SECRET=CLAVE al .ENV
- Install composer de ser necesario
- PHP artisan migrate (para crear base de datos)
- Listo para funcionar.

## licencias

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
