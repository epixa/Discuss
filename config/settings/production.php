<?php

return array(
    'phpSettings' => array(
        'display_startup_errors' => false,
        'display_errors' => false,
        'date' => array(
            'timezone' => 'America/New_York'
        )
    ),
    'db' => array(
        'adapter'  => 'PDO_MYSQL',
        'dbname'   => 'discussdb',
        'username' => 'root',
        'password' => 'root'
    ),
    'autoloaderNamespaces' => array(
        'Doctrine\\'
    ),
    'bootstrap' => array(
        'path' => sprintf('%s/Bootstrap.php', APPLICATION_PATH)
    ),
    'resources' => array(
        'frontController' => array(
            'moduleDirectory' => APPLICATION_PATH,
            'env' => APPLICATION_ENV
        ),
        'modules' => array(),
        'view' => array()
    )
);