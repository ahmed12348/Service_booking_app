<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# Service Booking App (Laravel + Sanctum)

A full-featured Laravel project implementing a Service Booking platform with role-based access, blade admin panel, and secure API endpoints using Laravel Sanctum.

---

## 🧰 Features

- Laravel Sanctum Authentication (Register, Login, Logout)
- Role Management (Admin & User)
- CRUD for Services (Admin via Blade views)
- Booking System (User books, Admin views)
- Secure API using `auth:sanctum` middleware
- Form Request validation for all inputs
- Clean and formatted JSON API responses

---

## ⚙️ Setup Instructions

```bash
# Clone repository
git clone https://github.com/yourname/service-booking-app.git
cd service-booking-app

# Install backend dependencies
composer install

# Install frontend dependencies
npm install && npm run dev

# Create environment config
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up your database credentials in .env
# DB_DATABASE=your_db
# DB_USERNAME=root
# DB_PASSWORD=

# Run database migrations
php artisan migrate --seed

# Install Sanctum
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
