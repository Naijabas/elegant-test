# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation#installation)



Install all the dependencies using composer

    composer install

Install  and Compile Assets

    npm install && npm run dev

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

**Set the database connection in .env before migrating (i.e Laravel db and WP db)**

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    composer install
    npm install && npm run dev
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate
    php artisan serve

