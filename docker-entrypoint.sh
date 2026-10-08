#!/bin/sh
set -e

rm -f /etc/apache2/mods-enabled/mpm_event.load /etc/apache2/mods-enabled/mpm_event.conf
rm -f /etc/apache2/mods-enabled/mpm_worker.load /etc/apache2/mods-enabled/mpm_worker.conf
a2enmod mpm_prefork >/dev/null 2>&1 || true

PORT="${PORT:-80}"
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

echo "DB config: host=${MYSQLHOST:-<not set>} port=${MYSQLPORT:-<not set>} db=${MYSQLDATABASE:-<not set>}"

# Retry migrations a few times in case MySQL is still starting up
n=0
until php spark migrate --no-header; do
  n=$((n+1))
  if [ "$n" -ge 10 ]; then
    echo "Migration FAILED after $n attempts - starting Apache anyway"
    break
  fi
  echo "Migration failed, retrying in 5s ($n/10)..."
  sleep 5
done

php spark db:seed DatabaseSeeder || echo "Seeding failed or skipped"

exec apache2-foreground
