<?php
return array(
    'cdliuserprofile' => array(),
    'view_manager' => array(
        'template_path_stack' => array(
            'cdliuserprofile' => __DIR__ . '/../view',
        ),
    ),
    'controller' => array(
        'classes' => array(
            'cdliuserprofile' => 'CdliUserProfile\Controller\ProfileController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'zfcuser' => array(
                'child_routes' => array(
                    'profile' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/profile',
                            'defaults' => array(
                                'controller' => 'cdliuserprofile',
                                'action'     => 'index',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);