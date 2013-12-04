<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
        'default' => array
        (
                'type'       => 'mysql',
                'connection' => array(
                        'hostname'   => $_SERVER['DB1_HOST'].':'.$_SERVER['DB1_PORT'],
                        'database'   => $_SERVER['DB1_NAME'],
                        'username'   => $_SERVER['DB1_USER'],
                        'password'   => $_SERVER['DB1_PASS'],
                        'persistent' => FALSE,
                ),
                'table_prefix' => '',
                'charset'      => 'utf8',
                'caching'      => FALSE,
                'profiling'    => TRUE,
        )
);
