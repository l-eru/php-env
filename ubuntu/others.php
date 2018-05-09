其他工具安装
============


```shell
sudo apt-get install redis nginx mysql-server
```


不知道MySQL5.7的密码
--------------------

1. 修改配置文件 /etc/mysql/mysql.conf.d/mysqld.cnf

```
# 在[mysqld]下一行添加
skip-grant-tables
```

2. 重启mysql

```shell
$ sudo systemctl restart mysql
```

3. 进行mysql， 修改密码

```
$ mysql


mysql> use mysql
mysql> update mysql.user set authentication_string=password('mysql密码') where user='root' and Host ='localhost';  
mysql> update user set plugin="mysql_native_password";
mysql> flush privileges;
mysql> quit;
```

4. 将第一步添加的配置信息删除


5. 重启mysql服务器

```shell
$ sudo systemctl restart mysql
```
