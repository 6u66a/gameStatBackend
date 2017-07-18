<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */


return [
    'doctrine' => [
        'connection' => [
            // Configuration for service `doctrine.connection.orm_default` service
            'orm_default' => [
                // configuration instance to use. The retrieved service name will
                // be `doctrine.configuration.$thisSetting`
                'configuration' => 'orm_default',

                // event manager instance to use. The retrieved service name will
                // be `doctrine.eventmanager.$thisSetting`
                'eventmanager' => 'orm_default',

                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,

                // connection parameters, see
                // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'doctrine',
                    'password' => 'doctrine',
                    'dbname' => 'gamestats',
                ],
            ],
        ],
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'my_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\YamlDriver::class,
                'cache' => 'array',
                'extension' => '.dcm.yml',
                'paths' => [
                    __DIR__ . '/../../data/Yaml',
                ],
            ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Application\\Entity' => 'my_annotation_driver',
                ],
            ],
        ],
    ],
];
