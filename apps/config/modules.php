<?php
/**
 * Register application modules
 */

$application->registerModules(array(
    'frontend' => array(
        'className' => 'Multiple\Frontend\Module',
        'path' => __DIR__ . '/../modules/frontend/Module.php'
    ),
    'api' => array(
        'className' => 'Multiple\Api\Module',
        'path' => __DIR__ . '/../modules/api/Module.php'
    ),
     'backend' => array(
         'className' => 'Multiple\Backend\Module',
         'path' => __DIR__ . '/../modules/backend/Module.php'
     )
));
