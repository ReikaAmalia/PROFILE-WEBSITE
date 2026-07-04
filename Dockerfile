FROM php:8.3-cli

# Install system packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip \
    bcmath \
    intl

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install frontend dependencies
RUN npm install
RUN npm run build

# Laravel optimizations
# RUN php artisan config:cache
# RUN php artisan route:cache || true
# RUN php artisan view:cache

# Create storage symlink (ignore if it already exists)
RUN php artisan storage:link || true

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=$PORT