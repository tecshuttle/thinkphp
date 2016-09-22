<?php
return array(
    //SESSION配置信息
    'SESSION_OPTIONS' => array(
        //'type'   => 'Db',//session采用数据库保存
        'type'   => 'Mysqli',//session采用数据库保存
        'expire' => 1440,//session过期时间，如果不设就是php.ini中设置的默认值
    ),
    'SESSION_TABLE'   => 'wp_session', //必须设置成这样，如果不加前缀就找不到数据表，这个需要注意

    //'SHOW_PAGE_TRACE' => true,  //显示调试信息

    //数据库配置信息
    'DB_TYPE'         => 'mysql', // 数据库类型
    'DB_HOST'         => 'localhost', // 服务器地址
    'DB_NAME'         => 'homestead', // 数据库名
    'DB_USER'         => 'homestead', // 用户名
    'DB_PWD'          => 'secret', // 密码
    'DB_PORT'         => 3306, // 端口
    'DB_PREFIX'       => 'wp_', // 数据库表前缀
    'DB_CHARSET'      => 'utf8', // 字符集
    'DB_DEBUG'        => TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);