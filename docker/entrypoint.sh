#!/bin/sh
set -e

cd /var/www/html

if [ -z "$APP_KEY" ]; then
    echo "APP_KEY is not set. Add it to .env:" >&2
    echo "  APP_KEY=base64:$(php -r "echo base64_encode(random_bytes(32));")" >&2
    exit 1
fi

echo "Waiting for database at $DB_HOST:$DB_PORT..."
until mysqladmin ping --skip-ssl -h"$DB_HOST" -P"$DB_PORT" -u"$DB_USERNAME" -p"$DB_PASSWORD" --silent; do
    sleep 2
done

php artisan storage:link 2>/dev/null || true
php artisan migrate --force

chown -R www-data:www-data storage bootstrap/cache public/upload

exec "$@"
