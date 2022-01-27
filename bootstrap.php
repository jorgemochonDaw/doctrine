<?php
require_once(__DIR__ . '/vendor/autoload.php');

$classDirs = array(
    __DIR__,
    __DIR__ . '/entities',
);

new \iRAP\Autoloader\Autoloader($classDirs);

function getEntityManager(): \Doctrine\ORM\EntityManager
{
    $entityManager = null;
    if ($entityManager === null) {
        $paths = array(__DIR__ . '/entities');
        $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths);
        $connectionParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => '',
            'dbname' => 'doctrine',
            'host' => '127.0.0.1',
        );
        $entityManager = \Doctrine\ORM\EntityManager::create($connectionParams, $config);
    }
    return $entityManager;
}
