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

# 📚 Service Booking App

A Laravel-based booking platform that supports role management, service listings, and RESTful APIs secured via Laravel Sanctum.

---

## ✅ Features

- Laravel Sanctum Authentication (SPA or API)
- Admin & User Roles
- Blade-based Admin Panel for Services
- API for Registration, Login, Bookings
- API protected with Sanctum middleware
- Booking System: Users book, Admin views all
- Validation via Form Requests
- Clean JSON Responses

---

## 🧾 Requirements

- PHP 8.x
- Laravel 10.x
- MySQL/MariaDB
- Node.js (for compiling assets)
- Composer

---

## ⚙️ Setup Instructions

```bash
# 1. Clone the repository
git clone https://github.com/your-username/service-booking-app.git
cd service-booking-app

# 2. Install backend dependencies
composer install

# 3. Install frontend dependencies
npm install && npm run dev

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Configure .env (DB & SANCTUM settings)

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Serve the application
php artisan serve
