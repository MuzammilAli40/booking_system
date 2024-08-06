# Meeting Room Booking System


## Installation

### 1. Clone the Repository

First, clone the repository to your local machine:

### 2. Install composer dependencies

Install composer packages using 'composer install' command

### 3. Create Database

Create a database in your phpmyadmin with name of booking_system. After creating database run the migration command.

### 4. Seed Database

Run these two commands in sequence: 
"php artisan db:seed --class=RolesSeeder" 
"php artisan db:seed --class=DatabaseSeeder"

By running these commands an admin user will be created 
The email and password for admin is:

Email: superadmin@gmail.com
Password: Test@123!


