# 📝 Blog App

A full-featured blog application built with **Laravel 10** and **PHP 8**, allowing users to create, read, update, and delete articles. This project serves as a solid foundation for more advanced applications.

## 🚀 Features

- User registration and login (authentication)
- Post management (CRUD functionality)
- Comment system
- Post categories for better organization
- Basic admin panel
- Route protection via middleware
- Custom form validation and error messages

## 🛠️ Tech Stack

- [Laravel 10](https://laravel.com/)
- [PHP 8.2+](https://www.php.net/)
- [MySQL](https://www.mysql.com/) or [PostgreSQL](https://www.postgresql.org/)
- [Blade](https://laravel.com/docs/10.x/blade) templating engine
- [Bootstrap 5](https://getbootstrap.com/) for UI (optional)

## 📦 Requirements

- PHP >= 8.1
- Composer
- SQlite, MySQL or PostgreSQL
- Node.js and NPM (for frontend assets)
- Laravel CLI

## ⚙️ Installation

```bash
# Clone the repository
git clone https://github.com/your-username/blog-app.git
cd blog-app

# Install PHP dependencies
composer install

# Copy and set up the environment file
cp .env.example .env
php artisan key:generate

# Configure your database credentials in .env
# DB_DATABASE=your_database
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Run database migrations and seeders
php artisan migrate --seed

# Install frontend assets (optional)
npm install && npm run dev

# Start the local development server
php artisan serve
