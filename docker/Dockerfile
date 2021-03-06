FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies for the operating system software
RUN apt-get update \
    && apt-get install -y \
      wget \
      zlib1g-dev \
      libzip-dev \
      libpq-dev \
      libicu-dev \
      postgresql-common \
      gnupg \
      ca-certificates \
      vim \
    && yes | sh /usr/share/postgresql-common/pgdg/apt.postgresql.org.sh \
    && apt-get install -y postgresql-client-12

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install php extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install \
      pdo \
      pdo_pgsql \
      opcache \
      zip \
      intl

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install node
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash - && apt-get install -y nodejs

# Copy working directory
COPY . .

# Install composer dependencies
RUN composer install

# Install node dependencies
RUN npm install

# Symlink storage
RUN php artisan storage:link

# Set write permissions for cache and storage
RUN chmod -R 777 bootstrap/cache storage

# Assign permissions of the working directory to the www-data user
RUN chown -R www-data:www-data \
      /var/www/html/storage \
      /var/www/html/bootstrap/cache

# Clear cache
RUN php artisan optimize:clear

# Expose port 9000
EXPOSE 9000

# Start php-fpm server (for FastCGI Process Manager)
CMD ["php-fpm"]