# buyme-todo

This is a simple EmberJS based TODO manager.
Server side based on Laravel 5.2 API and MySQL.

## Installation

First, you need to clone byme-todo repository:

>git clone git@github.com:anton-asnitsky/buyme-todo.git buyme

After cloning ends, enter buyme folder:
>cd buyme

Now you need to install dependencies:
>cd buyne-api

>composer install

>
>cd ..

Ok. We have depndncies for our API project. Now, move and install client 
dependncies:
>cd buyme-todo

>npm install

>cd ..

Now, run docker-compose to build the project.
>ddocker-compose build

Now, lets prepare project DB:
>cd buyme-api

>php artisan migrate

If you want to init our DB with fake data:

>php artisan db:seed --class=TodosTableSeeder

>cd ..

Now we raedy to launch:
>docker-compose up

## Project access:

[Web client](https://localhost:4200).

[REST API](http:/localhost:8080/todos)

Have fun!!


