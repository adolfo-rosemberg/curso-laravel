# Laravel 10 Game Categories Project

This is a project for managing game categories built using Laravel 10. It is based on a course that originally used Laravel 9, but has been updated to use the latest version of the framework.

## Features

The project includes the following features:

- Management of game categories
- CRUD operations for game categories
- Use of Laravel's routing, controller, and view systems
- Use of Eloquent ORM for database interactions

## Installation

To run the project, follow these steps:

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your-username/your-repo.git
   ```

2. Install the dependencies:

   ```
   composer install
   ```

3. Create a new `.env` file based on the example provided:

   ```
   cp .env.example .env
   ```

4. Generate a new `APP_KEY`:

   ```
   php artisan key:generate
   ```

5. Configure your database settings in the `.env` file:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

6. Run the migrations to create the necessary tables:

   ```
   php artisan migrate
   ```

7. Start the development server:

   ```
   php artisan serve
   ```

8. Visit the app in your web browser at `http://localhost:8000`.

## Usage

The app allows you to manage game categories. You can perform the following operations:

- View a list of all game categories
- Create a new game category
- Edit an existing game category
- Delete a game category

## Credits

This project was built following a course on Laravel by El Rincon de Isma, with updates for Laravel 10 made by Adolfo Rosemberg.