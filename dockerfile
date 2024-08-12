# Use PHP with Apache as the base image
FROM php:8.0.2-apache

# Install necessary packages
RUN apt-get update
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Apache mod\_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy OJS files
COPY ./OJS .

# Set permissions
 RUN chown -R www-data:www-data /var/www/html

# Set environment variables
 ENV APACHE_DOCUMENT_ROOT=/var/www/html

# Expose the Apache port
EXPOSE 80

# Set the default command to start Apache
CMD ["apache2-foreground"]