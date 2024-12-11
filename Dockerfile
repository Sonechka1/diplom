# Используем официальный образ PHP с нужными расширениями
FROM php:8.2-fpm

# Устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /var/www

# Копируем файлы проекта
COPY . .

# Устанавливаем PHP-зависимости
RUN composer install --no-dev --optimize-autoloader

# Устанавливаем права на каталоги storage и cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Выполняем миграции (используйте переменные окружения для базы данных)
RUN php artisan migrate --force

# Открываем порт 80
EXPOSE 80

# Запускаем PHP-FPM
CMD ["php-fpm"]
