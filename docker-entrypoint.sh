#!/bin/sh

# Clear and optimize application caches dynamically on boot
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM in the background and Nginx in the foreground
php-fpm -D && nginx -g "daemon off;"
