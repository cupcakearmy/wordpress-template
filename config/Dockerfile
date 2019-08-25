FROM wordpress:5-php7.3-apache

# # Possible
# # bcmath bz2 calendar ctype curl dba dom enchant exif fileinfo filter ftp gd gettext gmp hash
# # iconv imap interbase intl json ldap mbstring mysqli oci8 odbc opcache pcntl pdo pdo_dblib 
# # pdo_firebird pdo_mysql pdo_oci pdo_odbc pdo_pgsql pdo_sqlite pgsql phar posix pspell readline 
# # recode reflection session shmop simplexml snmp soap sockets sodium spl standard sysvmsg sysvsem 
# # sysvshm tidy tokenizer wddx xml xmlreader xmlrpc xmlwriter xsl zend_test zip

RUN docker-php-ext-install pdo_mysql \
	&& a2enmod ext_filter headers