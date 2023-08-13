FROM php:8.2-fpm-buster

ARG HOST_UID=1000
ARG HOST_GID=1000

RUN groupadd user_infra -g$HOST_GID
RUN useradd user_infra -u$HOST_UID -g$HOST_GID -d /home/user_infra -s /bin/bash

RUN apt-get update && apt-get install -y \
    curl \
	git \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2 \
    libxml2-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install composer globally
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Make the given UID the default user
USER "$HOST_UID:$HOST_GID"
