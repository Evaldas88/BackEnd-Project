# This  management system Backend with Laravel9

## About the project

* It's an application created with PHP Laravel framework as Backend part and JavaScript React library as Frontend part.
* Bootstrap framework
* MySQL Workbench 

# About this App :    

* This app has connection with MySQL Workbench
* All the changes made in application change the database to.
  

# Installiation

* Step to run this project
  
* Create folder where you want:

    * Open terminal and paste this:
             git clone  https://github.com/Evaldas88/BackEnd-Project.git

* In the terminal post this(if composer was instaleted in C:\xampp\htdocs) : 

            php ../composer.phar install  
* Create database schema in the MySQL Workbench  with name - travel  
* Then in your cloned laravel project find .env.example file, copy and change it to .env;
* Open .env file, find database line and change it to your freshly created database DB_DATABASE=travel
* Run migrations and seeders by typing:
            php artisan migrate 
            php artisan db:seed 
* Run:
            php artisan serve
* To run project in React follow the launch procedure here: https://github.com/Evaldas88/React_FrontEnd

# Author

This project was developed by  - Evaldas Skackauskas 

<a href="https://www.linkedin.com/in/evaldas-skackauskas-35505516a/">linkedin</a>
