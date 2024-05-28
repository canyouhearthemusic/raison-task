FROM nginx:stable-alpine

ENV NGINXUSER=app
ENV NGINXGROUP=app

RUN mkdir -p /var/www/html/dist

ADD ./conf.d/default.conf /etc/nginx/conf.d/default.conf

RUN sed -i "s/user www-data/user ${NGINXUSER}}/g" /etc/nginx/nginx.conf

RUN adduser -g ${NGINXGROUP} -s /bin/sh -D ${NGINXUSER}