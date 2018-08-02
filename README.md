
## PHP-NGINX

PHP-FPM built with Nginx, and with much more:

- Built with Alpine
- Environment variables passed automaticly
- With pdo-mysql/pdo-sqlite/pdo-postgre

## Usage

```
docker run -p 80:80 ddliu/php-nginx
```

- Where is webroot volume: `/var/www/html/`

## Thanks

This is a fork of trafex/alpine-nginx-php7