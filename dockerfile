# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Replace Debian mirrors to address DNS resolution issues
RUN sed -i 's|http://deb.debian.org|http://mirror.debian.org|g' /etc/apt/sources.list

# Install necessary system libraries and PHP extensions
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql dom mbstring

# Set the working directory
WORKDIR /var/www/html/

# Set the ServerName for Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Install PHPUnit 10
ENV PATH="/root/.composer/vendor/bin:${PATH}"
RUN composer global require phpunit/phpunit:^10

# Expose port 80
EXPOSE 80

# Copy application code to the container
COPY myapp/ /var/www/html
