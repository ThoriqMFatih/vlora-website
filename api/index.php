<?php

// Pastikan direktori sementara di /tmp tersedia untuk Laravel
$storageDirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap',
    '/tmp/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

putenv('APP_STORAGE=/tmp/storage');
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_SERVER['APP_STORAGE'] = '/tmp/storage';

putenv('APP_MAINTENANCE_DRIVER=file');
$_ENV['APP_MAINTENANCE_DRIVER'] = 'file';
$_SERVER['APP_MAINTENANCE_DRIVER'] = 'file';

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');

putenv('SESSION_DRIVER=file');
$_ENV['SESSION_DRIVER'] = 'file';
$_SERVER['SESSION_DRIVER'] = 'file';

if (!getenv('DB_CONNECTION')) {
    putenv('DB_CONNECTION=pgsql');
    $_ENV['DB_CONNECTION'] = 'pgsql';
    $_SERVER['DB_CONNECTION'] = 'pgsql';
}

if (!getenv('DB_HOST')) {
    putenv('DB_HOST=aws-0-ap-south-1.pooler.supabase.com');
    $_ENV['DB_HOST'] = 'aws-0-ap-south-1.pooler.supabase.com';
    $_SERVER['DB_HOST'] = 'aws-0-ap-south-1.pooler.supabase.com';
}

if (!getenv('DB_PORT')) {
    putenv('DB_PORT=6543');
    $_ENV['DB_PORT'] = '6543';
    $_SERVER['DB_PORT'] = '6543';
}

if (!getenv('DB_DATABASE')) {
    putenv('DB_DATABASE=postgres');
    $_ENV['DB_DATABASE'] = 'postgres';
    $_SERVER['DB_DATABASE'] = 'postgres';
}

if (!getenv('DB_USERNAME')) {
    putenv('DB_USERNAME=postgres.mhxaoynykyqnxwqmrqxc');
    $_ENV['DB_USERNAME'] = 'postgres.mhxaoynykyqnxwqmrqxc';
    $_SERVER['DB_USERNAME'] = 'postgres.mhxaoynykyqnxwqmrqxc';
}

if (!getenv('DB_PASSWORD')) {
    putenv('DB_PASSWORD=Th0r1p14!3009');
    $_ENV['DB_PASSWORD'] = 'Th0r1p14!3009';
    $_SERVER['DB_PASSWORD'] = 'Th0r1p14!3009';
}

if (!getenv('DB_SSLMODE')) {
    putenv('DB_SSLMODE=require');
    $_ENV['DB_SSLMODE'] = 'require';
    $_SERVER['DB_SSLMODE'] = 'require';
}

require __DIR__ . '/../public/index.php';
