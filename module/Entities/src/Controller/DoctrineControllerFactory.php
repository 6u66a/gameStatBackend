<?php
/**
 * Created by PhpStorm.
 * User: haller
 * Date: 13.07.2017
 * Time: 15:18
 */

namespace Entities\Controller;


use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class DoctrineControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $em = $container->get(EntityManager::class);
        return new RestController($em);
    }
}