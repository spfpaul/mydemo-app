FROM public.ecr.aws/w8m1p4d9/php_7_4_apache:latest
COPY src/ /var/www/html/
WORKDIR /var/www/html
EXPOSE 80
