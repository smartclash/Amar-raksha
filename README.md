# Amar-raksha

This application tries to connect volunteers and higher officials during the time of crisis. 
But this application tries to go one step ahead by having multiple types of events such as fundraising, contest.

## Installation

The application can be setup and ran in few moments by following this set of commands

It is assumed that you have PHP 8 and Node 16 or above installed in your system.

```bash
// Install php dependencies
composer install

// Install node dependencies
npm -g i pnpm
pnpm i

// Scaffold frontend assets
pnpm run build

// Copy environment file and create database
cp .env.example .env
touch database/database.sqlite

// Generate security key
php artisan key:generate

// Migrate tables
php artisan migrate

// Serve the application
php artisan serve
```
