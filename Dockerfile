FROM 2pisoftware/cmfive


ADD ./src/cmfive/install.sql /install.sql
ADD ./src/nginx/default.conf /etc/nginx/sites-enabled/default
ADD ./src/cmfive/config.php /var/www/cmfive/config.php


EXPOSE 80 443
# phusion/baseimage init script
CMD ["/sbin/my_init"]

