FROM centos:7
RUN yum -y update && yum install -y git make httpd epel-release http://rpms.remirepo.net/enterprise/remi-release-7.rpm && yum-config-manager --enable remi-php74 \
 && yum install -y pwgen php php-cli php-common php-zip php-soap php-pear php-mcrypt php-cli php-gd php-curl php-mbstring php-xml php-simplexml \
 && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 

WORKDIR /var/www/html/app/

EXPOSE 80

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]