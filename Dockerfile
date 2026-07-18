FROM php:8.2-apache

COPY . /var/www/html/
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html \
    && mkdir -p /var/www/html/storage/messages \
    && chown -R www-data:www-data /var/www/html/storage

EXPOSE 8080
CMD sh -c "sed -i \"s/80/\${PORT:-8080}/g\" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf && apache2-foreground"
