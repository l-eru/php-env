安装源码编译需要的库文件以及工具
===================================


```shell
$ sudo apt-get install update
$ sudo apt-get install gcc libxml2-dev autoconf



```



configure: error: Cannot find OpenSSL's <evp.h>
-----------------------------------------------

```shell
// 安装openssl开发库
$ sudo apt-get install libssl-dev
// 查询libssl.so所在路径
$ sudo find / -name libssl.so
// 假设查询到的路径为 /usr/lib/x86_64-linux-gnu/libssl.so
$ sudo ln -s /usr/lib/x86_64-linux-gnu/libssl.so /usr/lib
```

```shell
$ sudo apt-get install libcurl4-openssl-dev libpng-dev libreadline-dev
```
