<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Admin',
    'DEFAULT_GROUP' => 'Admin',
    'APP_GROUP_MODE' => 1,      //0表示使用普通分组，1表示使用独立分组；
    'APP_GROUP_PATH' => 'Modules',



    //模板路径
    'TMPL_FILE_DEPR' => '_',

    //数据库配置参数
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'pm',       //此处的数据库名要对应！！
    'DB_USER' => 'root',
    'DB_PWD'  => '',       //此处的数据库密码要对应！！
    'DB_PREFIX' => '',

    'show_page_trace'=>ture,
);
?>