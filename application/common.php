<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//$parseDsn= function ($config)
//{
//    //$dsn = 'sqlsrv:Database=' . $config['database'] . ';Server=' . $config['hostname'];
//    $dsn = 'dblib:dbname=' . $config['database'] . ';host=' . $config['hostname'];
//    if (!empty($config['hostport'])) {
//        //$dsn .= ',' . $config['hostport'];
//        $dsn .= ':' . $config['hostport'];
//    }
//    return $dsn;
//};
//Closure::bind($parseDsn,)\db\connector\Sqlsrv