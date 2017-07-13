<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Controller\IndexController;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'rest' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/rest[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+'
                    ),
                    'defaults' => [
                        'controller' => Controller\RestController::class,
                    ],
                ],
            ],
            'home' => array(
                'type' => Literal::class,
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => Controller\IndexController::class,
                        'action' => 'index'
                    ),
                ),
            ),
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\RestController::class => InvokableFactory::class,
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ],
];
