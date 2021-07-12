```bash
# 安装 php 依赖包
composer install
```

```bash
# 下载 selenium server
curl -o selenium-server-standalone.jar https://selenium-release.storage.googleapis.com/3.141/selenium-server-standalone-3.141.59.jar
# 启动 selenium-server
java -jar selenium-server-standalone.jar
```
```bash
# 开启 safari 驱动
safaridriver --enable
# 运行驱动（可选，默认情况下，selenium 会自己去尝试启动）
/usr/bin/safaridriver -p 1337
```

```bash
# 运行 php 脚本
php index.php
```