PHP源码编译
============


1. 下载并解压PHP源码

```shell
$ wget http://am1.php.net/distributions/php-7.2.5.tar.bz2
$ tar -xjvf php-7.2.5.tar.bz2
```


2. 编译

```shell
$ cd php-7.2.5
$ ./configure --prefix=/usr \
  --with-curl \
  --with-gd \
  --with-gettext \
  --with-zlib \
  --with-mysqli \
  --with-openssl \
  --with-pear \
  --with-pdo-mysql \
  --with-readline \
  --enable-opcache \
  --enable-inline-optimization \
  --enable-zip \
  --enable-sockets \
  --enable-mbstring \
  --enable-xml \
  --enable-intl \
  --with-fpm-user=nginx \
  --with-fpm-group=nginx \
  --enable-fpm


$ make
$ sudo make install
$ sudo cp php.ini-development /usr/local/lib/php.ini
```


3. 安装完毕后配置php.ini

+ 查看php.ini所在的文件目录
```shell
$ php -i|grep php.ini
```

+ 将php.ini-development或php.ini-production复制到php.ini所在文件

```shell
$ sudo cp php.ini-development /usr/lib/php.ini
```

4. [安装composer](https://getcomposer.org/download/)

根据教程下载好composer后移动到/usr/bin目录

```shell
$ sudo mv composer.phar /usr/bin/composer
```

6. 配置国内镜像

```shell
$ composer config -g repo.packagist composer https://packagist.phpcomposer.com
```

7. 安装phpredis扩展


```shell
$ git clone https://github.com/phpredis/phpredis.git

$ cd phpredis
$ phpize
$ ./configure --with-php-config=/usr/local/bin/php-config
$ make
$ sudo make install
````

在php.ini中添加redis扩展支持
```
#/usr/lib/php.ini
extension=redis.so
```




