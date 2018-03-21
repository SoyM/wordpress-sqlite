FROM webdevops/php-apache:7.0

WORKDIR /app
ADD ./web /app
RUN chmod 0777 -R /app
EXPOSE 80

