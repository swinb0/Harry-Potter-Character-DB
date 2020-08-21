FROM archlinux
RUN pacman --noconfirm -Sy nodejs npm composer
RUN composer global require laravel/installer
WORKDIR /srv/http/
COPY ./app/ /srv/http/
COPY ./php.ini/ /etc/php/php.ini
RUN composer install && npm install && npm run dev
CMD php artisan migrate && php artisan serve --host 0.0.0.0
