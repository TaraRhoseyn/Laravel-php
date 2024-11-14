# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Copy application code to the container
COPY myapp/ /var/www/html

# Set the working directory
WORKDIR /var/www/html/

# Set the ServerName for Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHPUnit 10
RUN composer global require phpunit/phpunit:^10 \
    && ln -s /root/.composer/vendor/bin/phpunit /usr/local/bin/phpunit

# Expose port 80
EXPOSE 80

