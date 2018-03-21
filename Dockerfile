FROM webdevops/php-apache:7.0

WORKDIR /app
ADD ./web /app
EXPOSE 80

