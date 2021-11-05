#!/bin/bash

# Install composer dependencies
composer install

# Install node dependencies
npm install

# Set write permissions for cache and storage
chmod -R 777 bootstrap/cache storage

# Symlink storage
php artisan storage:link

# Assign permissions of the working directory to the www-data user
chown -R www-data:www-data \
      /var/www/html/storage \
      /var/www/html/bootstrap/cache

# Clear cache
php artisan optimize:clear

# Start php-fpm server (for FastCGI Process Manager)
php-fpm