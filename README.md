#

使用:
## 方法一 
设置 INDEX_PATH 环境变量
``` php
require_once dirname(dirname(__file__)) ."/src/autoload.php" ;
```
## 方法二

``` php
require_once dirname(dirname(__file__)) ."/src/autoload.php" ;
XCC\XAutoload::setup($index_path);
```
