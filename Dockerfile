# Use PHP Apache Image
FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy the source code into container
COPY . /var/www/html/

# Set Permissions
RUN chown -R www-data:www-data /var/www/html/

# Expose Port 80
EXPOSE 80

# Start Apache Server
CMD ["apache2-foreground"]
