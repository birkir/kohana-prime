<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
        'default' => array
        (
                'type'       => 'MySQL',
                'connection' => array(
                        'hostname'   => '.cleardb.com',
                        'database'   => 'heroku_',
                        'username'   => '',
                        'password'   => '',
                        'persistent' => FALSE,
                ),
                'table_prefix' => '',
                'charset'      => 'utf8',
                'caching'      => FALSE,
                'profiling'    => TRUE,
        )
);
