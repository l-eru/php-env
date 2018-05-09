源码编译phalcon
================


1. 下载cphalcon

```shell
$ git clone https://github.com/phalcon/cphalcon.git
```

2. 编译安装

```shell
$ cd cphalcon/build

$ sudo ./install --phpize /usr/local/bin/phpize --php-config /usr/local/bin/php-config
```


3. 在php.ini中添加phalcon扩展

```
#/usr/local/lib/php.ini
extension=phalcon.so
```

