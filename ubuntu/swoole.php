源码编译SWOOLE
===============


1. 安装hiredis(swoole使用异步redis需要该库)

```shell
$ git clone https://github.com/redis/hiredis.git
$ cd hiredis
```

如果要修改hiredis库所在路径，可以修改Makefile文件
```
#hiredis/Makefile
#默认PREFIX为/usr/local
PREFIX?=/usr
```


```shell
$ make -j
$ sudo make install
$ sudo ldconfig
```

2. 下载源码并编译swoole

```shell
$ git clone https://github.com/swoole/swoole.git -b v2.1.3
$ cd swoole

$ phpize
$ ./configure --with-php-config=/usr/local/bin/php-config --enable-async-redis

$ make
$ sudo make install


3. 添加swoole扩展

```
#/usr/local/lib/php.ini
extension=swoole.so
```

扩展安装成功查看
```
$ php -m | grep swoole
```


4. 如果失败，则需要进行下列步骤

```shell
$ vim ~/.bash_profile
```

```
# ~/.bash_profile
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib

```

```shell
source ~/.bash_profile
```

5. 查看swoole详细信息
```shell
$ php --ri swoole
```
