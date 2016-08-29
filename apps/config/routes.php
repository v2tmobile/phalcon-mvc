<?php
/**
 * User: v2tmobile
 * Date: 8/29/16
 * Time: 1:22 AM
 * Copyright (c) Ahiho,.JSC. All right reserved.
 */

$router = $di->get("router");
foreach ($application->getModules() as $key => $module) {
    $namespace = str_replace('Module','Controllers', $module["className"]);
//    die($namespace);
//    $namespace = $module['className'];
    $router->add('/'.$key.'/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ])->setName($key);
    $router->add('/'.$key.'/:controller/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ]);
    $router->add('/'.$key.'/:controller/:action/:params', [
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ]);
}
$di->set("router", $router);