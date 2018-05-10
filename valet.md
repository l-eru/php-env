Linux上配置Valet
==================

1. 下载valet

```shell
$ composer global require cpriego/valet-linux
```


2. 将valet设置为全局变量

  + 方法一
  
  ```
  # 在~/.bash_profile末尾添加全局路径, 保存完毕后要立即生效需要source ~/.bash_profile
  export PATH=$PATH:~/.config/composer/vendor/bin/
  ```

  + 方法二

  ```
  # 建立软链接
  $ sudo ln -s ~/.config/composer/vendor/bin/valet /usr/local/bin/valet
  ```

3. 安装valet

```shell
# valet安装所需的库(ubuntu)
$ sudo apt-get install jq xsel libnss3-tools
# centos
$ sudo yum install jq xsel
$ valet install
```


4. 配置

```shell
# 创建一个网站开发目录
$ mkdir ~/Sites
$ cd ~/Sites

# 配置该目录能够让valet识别
$ valet park

# 创建一个简单的项目
$ mkdir my-project/public -p
$ echo '<?php phpinfo();' > my-project/public/index.php

# 在浏览器访问my-project.test就可以看到运行效果
```

5. 其他

+ 域名默认为目录名 + '.' + test。通过domain命令修改
```
# 运行后可以使用 目录名 + '.' + hello访问
$ valet domain hello
```

+ https方式访问(只能单个指定，不能批量)
```
# 可以对指定目录进行https访问
$ valet secure + 指定目录
```

+ 外网共享访问(https目前无法共享)
```
# 必须进到要共享的项目目录中
$ cd my-project
$ valet share
```


