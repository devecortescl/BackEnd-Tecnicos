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

- POST http://api.tecnicos.test/v1/insertUsers
- GET  http://api.tecnicos.test/v1/showUsers
- GET  http://api.tecnicos.test/v1/updateUsers/{id}
- PUT  http://api.tecnicos.test/v1/deleteUsers/{id}


CLIENTS RUTAS

- POST http://api.tecnicos.test/v1/insertClients
- GET  http://api.tecnicos.test/v1/showClients
- GET  http://api.tecnicos.test/v1/updateClients/{id}
- PUT  http://api.tecnicos.test/v1/deleteClients/{id}


HARDWARE RUTAS

- POST http://api.tecnicos.test/v1/insertHardware
- GET  http://api.tecnicos.test/v1/showHardware
- GET  http://api.tecnicos.test/v1/updateHardware/{id}
- PUT  http://api.tecnicos.test/v1/deleteHardware/{id}

REPORTS RUTAS

- POST http://api.tecnicos.test/v1/insertReports
- GET  http://api.tecnicos.test/v1/showReports
- GET  http://api.tecnicos.test/v1/updateReports/{id}
- PUT  http://api.tecnicos.test/v1/deleteReports/{id}

## Documentacion + Instalación

Enlace de la documentacion del api http://api.tecnicos.test/

Pasos a seguir:
- Clone repositorio
- tener disponible xampp o wampp con apache 
- Crear base de datos y ajustar el archivo ENV.EXAMPLE
- install composer de ser necesario
- php artisan migrate (para crear base de datos)
- listo para funcionar.

## licencias

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
