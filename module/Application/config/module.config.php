<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Application\Controller\IndexController;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/home',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type'    => Segment::class,
                        'options' => [
                            'route'    => '[/:action[/:id]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                            ],
                        ],
                    ], //-- fim rota filha default
                ], //-- fim rota filha
            ],            
        ],
    ],
    'translator' => array(
        'locale' => 'pt_BR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'view_helpers' => [
        'invokables' => [
            'translate' => \Zend\I18n\View\Helper\Translate::class,
            'currencyFormat' => \Zend\I18n\View\Helper\CurrencyFormat::class,
            'dateFormat' => \Zend\I18n\View\Helper\DateFormat::class,
            'numberFormat' => \Zend\I18n\View\Helper\NumberFormat::class,
        ]
    ],    
    'controllers' => [
        'factories' => [
            IndexController::class => InvokableFactory::class,
        ],
    ],
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Entity')
                //'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    //'Entity' => __NAMESPACE__ . '_driver'
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'             => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layout2'            => __DIR__ . '/../view/layout/layout2.phtml',
            'layout/menu'               => __DIR__ . '/../view/layout/menu.phtml',
            'layout/mensagens'          => __DIR__ . '/../view/partials/mensagens.phtml',
            'application/index/index'   => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'                 => __DIR__ . '/../view/error/404.phtml',
            'error/index'               => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
