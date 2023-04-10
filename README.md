<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Server
Este proyecto está generado con [Laravel Framework]("https://laravel.com) 9.52.5, Composer version 2.5.5 y XAMPP Control Panel versión 3.3.0.

Es necesario ejecutar el comando `composer install` en la carpeta del proyecto para instalar las dependencias del proyecto.

Se abre el Panel de Control de XAMPP y se inicia Apache y MySQL.

## Base de datos

Se crea la base de datos ***vacunacion***, una vez creada se abre una terminal en la carpeta del proyecto y se ejecuta el comando `php artisan migrate`, esto migrará las tablas a la base de datos.

Una vez creada la base de datos es recomendable crear registros para la tabla de campañas para que se pueda utilizar las funcionalidades en el frontend, en este caso se tiene un archivo `campanas.sql` para poder importar dos registros de campañas.

## Métodos

### POST

Con este método se añaden nuevos registros a la base de datos, en este caso toma el registro que se tenga en formato JSON y añade todos los campos necesarios, desde el forntend se encuentran las validaciones necesarias para que se envien los datos correctamente.

Este método solo esta implementado para la tabla usuarios,
