# Student Records CRUD Application

A simple Laravel CRUD application for managing student records.

## Features

- Add student records
- View student records
- Edit student records
- Delete student records
- Form validation
- MySQL database integration

## Requirements

- PHP
- Composer
- Laravel
- MySQL
- XAMPP

## Installation

1. Clone the repository.
2. Open the project folder.
3. Run:

   composer install

4. Copy `.env.example` to `.env`.
5. Configure the MySQL database in `.env`.
6. Run:

   php artisan key:generate
   php artisan migrate

7. Start the application:

   php artisan serve

8. Open the provided localhost address in your browser.

## Database

Database name:

student_records

The students table contains:

- id
- student_number
- first_name
- last_name
- course
- created_at
- updated_at

## Author

Irvin Rosendo
