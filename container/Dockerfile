FROM php:7.0-cli
RUN apt-get update && \
    apt-get install -y libxml2-dev zabbix-agent && \
    docker-php-ext-install soap
