<?php
return array(
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'hsc',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'apks2000',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'hsc_',    // 数据库表前缀
     /* SESSION设置 */
    'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
    'SESSION_OPTIONS'       =>  array(), // session 配置数组 支持type name id path expire domain 等参数
    'SESSION_TYPE'          =>  'Db', // session hander类型 默认无需设置 除非扩展了session hander驱动
    'SESSION_PREFIX'        =>  '', // session 前缀
    //'VAR_SESSION_ID'      =>  'session_id',     //sessionID的提交变量

    /* Cookie设置 */
    'COOKIE_EXPIRE'         =>  0,       // Cookie有效期
    'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
    'COOKIE_PATH'           =>  '/',     // Cookie路径
    'COOKIE_PREFIX'         =>  '',      // Cookie前缀 避免冲突
    'COOKIE_SECURE'         =>  false,   // Cookie安全传输
    'COOKIE_HTTPONLY'       =>  '',      // Cookie httponly设置

    /*模板设置 原本{} 这里设置成{{}} 和python一致*/
    'TMPL_L_DELIM'          =>  '{{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}}',            // 模板引擎普通标签结束标记
	'TAGLIB_BUILD_IN'       =>  'cx', // 内置标签库名称(标签使用不必指定标签库名称),以逗号分隔 注意解析顺序
    'SHOW_PAGE_TRACE'		=>'true',
    'TMPL_CACHE_ON'         =>  false,
    'HTML_CACHE_ON'         =>  false,
    'AUTH_GROUP_ID'         =>'1',
    'TAG_NESTED_LEVEL'      =>5,
    );
