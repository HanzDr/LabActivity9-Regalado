# Bakuna Tracker

Bakuna Tracker is a Laravel application for viewing community vaccination schedules, overdue records, and completion statistics. It uses Blade views, Tailwind CSS, Vite, SQLite, and Laravel session authentication.

## Requirements

- PHP 8.5+
- Composer
- Node.js and npm

## Setup

From the project directory, install the PHP and JavaScript dependencies:

```bash
composer install
npm install
```

Create the SQLite database if it does not exist, then run the migrations and seed the sample data:

```bash
php artisan migrate:fresh --seed
```

Start the frontend asset watcher and Laravel development server in separate terminals:

```bash
npm run dev
php artisan serve
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in a browser.

## Seeded login

```text
Email: nurse.regalado@bakuna.test
Password: bakuna2026
```

## Main pages

- `/login` - sign in
- `/dashboard` - vaccination summary and alerts
- `/schedule` - full vaccination schedule

The dashboard and schedule pages require authentication. Use the Logout button in the navigation to end the session.

## Useful commands

```bash
php artisan test
php artisan view:cache
npm run build
```
