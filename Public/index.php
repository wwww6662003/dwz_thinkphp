<?php
// +----------------------------------------------------------------------
// | Author: zhanghuihua
// +----------------------------------------------------------------------

// 定义ThinkPHP框架路径
define('THINK_PATH', '../ThinkPHP');
//定义项目名称和路径
define('APP_NAME', 'Admin');
define('APP_PATH', '../Admin');

define('NO_CACHE_RUNTIME', true);
define('STRIP_RUNTIME_SPACE', false);

// 加载框架入口文件
require(THINK_PATH."/ThinkPHP.php");
//实例化一个网站应用实例
App::run();
?>