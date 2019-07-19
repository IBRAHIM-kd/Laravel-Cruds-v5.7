STEPS TO RUN THIS PROJECT ----

Installation steps

Follow the bellow steps to install and set up the application.

Step 1: Download the Application

Step 2: Configure the Application

After you have download this project folder the project need to be set up by following commands-

In terminal go to your project directory and Run

  composer install 

Then copy the .env.example file to .env file in the project root folder

Edit the .env file and fill all required data for the below variables

  APP_URL=http://localhost //your application domain URL go here

  DB_HOST=127.0.0.1 // Your DB host IP. Here we are assumed it to be local host
  DB_PORT=3306 //Port if you are using except the default
  DB_DATABASE=name_of_your_database
  DB_USERNAME=db_user_name
  DB_PASSWORD=db_password

Create all the necessary tables need for the application by runing the below command.

  php artisan migrate

Thats all! The application is configured now.

Than run ---  $ php artisan serve | to start the Application server http://localhost:8000/employees/create

