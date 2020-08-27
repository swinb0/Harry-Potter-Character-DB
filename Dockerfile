FROM archlinux:20200605
RUN pacman --noconfirm -Syu nodejs npm composer
RUN composer global require laravel/installer
WORKDIR /srv/http/
COPY ./app/ /srv/http/
COPY ./php.ini/ /etc/php/php.ini
RUN composer install 
CMD php artisan migrate && php artisan serve --host 0.0.0.0
