# Creado por: torrescusa05
# Imagen oficial PHP en dockerhub
FROM php:8.2.20-apache-bookworm

# Apache utiliza un puerto sin permisos de rosot
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf \
    && chown -R www-data:www-data /var/www/html /var/log/apache2 /var/run/apache2

# Directorio de trabajo
WORKDIR /var/www/html

# Archivos del directorio que van al contenedor, aseguramos que el fichero solo tenga permisos www-data.
COPY --chown=www-data:www-data index.php /var/www/html/

# Puerto sin permisos de root
EXPOSE 8080

# Principio de menor privilegio
USER www-data

# Sintaxis exec
CMD ["apache2-foreground"]