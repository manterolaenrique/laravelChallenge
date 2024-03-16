<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto Laravel Challenge

Este proyecto es parte de un desafío de desarrollo utilizando el framework Laravel. El objetivo principal es interactuar con una API pública para obtener datos y almacenarlos en una base de datos. Además, se proporciona una API propia para acceder a estos datos filtrados por categoría.

## Requisitos

- PHP >= 7.4
- Laravel >= 8.x
- Composer

## 1. Clonar el repositorio:
git clone https://github.com/manterolaenrique/laravelChallenge.git

## 2. Instalar dependencias:
cd laravelChallenge1
composer install

##  3. Configuración del entorno:

- Copiar el archivo .env.example a .env:

cp .env.example .env

- Generar una clave de aplicación:

php artisan key:generate

 - Configurar la conexión a la base de datos en el archivo .env.

 ## 4 Migraciones y semillas:

 php artisan migrate --seed

## 5 Servidor de desarrollo:

php artisan serve

## Pruebas
Pruebas Unitarias
Para ejecutar las pruebas unitarias:

php artisan test --testsuite=Unit

Pruebas de Integración
Para ejecutar las pruebas de integración:

php artisan test --testsuite=Feature

Pruebas de API
Puedes probar la API utilizando herramientas como Postman o ejecutando scripts de prueba automatizados.

## Uso
API Personalizada
Puedes acceder a la API personalizada en la siguiente ruta:

{SITE_URL}/api/{category}

Reemplaza {SITE_URL} con la URL de tu servidor y {category} con la categoría deseada, por ejemplo: http://localhost:8000/api/Animals.

La API devolverá los datos correspondientes a la categoría especificada.

