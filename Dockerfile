FROM php:8.2-apache

# Set the ServerName directive to localhost to suppress the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy application files into the container
COPY . /var/www/html/

# Expose port 80 for the application
EXPOSE 80
