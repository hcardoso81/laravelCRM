<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Project

## Add Laravel UI

-   https://www.youtube.com/watch?v=zVk3dloLdsg&list=PLDYiB4l8VPZbRlDBXZgAOxTNkCPIe4D6R&index=3
-   create vhost: http://local-crm.laravel.com/
-   https://github.com/laravel/ui
-   composer require laravel/ui
-   php artisan ui react --auth
-   add system verify email

## Add template AdminLTE

-   https://www.youtube.com/watch?v=4S9pZ73NWos&list=PLDYiB4l8VPZbRlDBXZgAOxTNkCPIe4D6R&index=4
-   https://github.com/ColorlibHQ/AdminLTE/releases

## Add customize login and register

-   https://www.youtube.com/watch?v=6BJDkEggw4Y&list=PLDYiB4l8VPZbRlDBXZgAOxTNkCPIe4D6R&index=5

## Add schema database and migrations

-   https://www.youtube.com/watch?v=3Z_50wHRK08&list=PLDYiB4l8VPZbRlDBXZgAOxTNkCPIe4D6R&index=6
-   add soft deletes to table users
-   create table Clients: php artisan make:model Client -m
-   create table Projects: php artisan make:model Project -m
-   create table Tasks: php artisan make:model Task -m
-   modify migrations(add fields) and models. Add fields fillables and softDeletes
-   create seed UserSeeder: php artisan make:seed UserSeeder
-   modify databaseSeeder
-   run migrations: php artisan migrate:fresh --seed
