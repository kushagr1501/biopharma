FROM php:8.2-apache

# Enable apache mod_rewrite for .htaccess rules
RUN a2enmod rewrite

# Copy all project files to the Apache document root
COPY . /var/www/html/

# Set appropriate permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html/

# Expose port 80
EXPOSE 80
