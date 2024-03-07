<?php

namespace ContainerJsXDkwx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tf6Ed0OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tf6Ed0O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tf6Ed0O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'adresse' => ['privates', '.errored..service_locator.Tf6Ed0O.App\\Entity\\Adresse', NULL, 'Cannot autowire service ".service_locator.Tf6Ed0O": it needs an instance of "App\\Entity\\Adresse" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'adresse' => 'App\\Entity\\Adresse',
            'entityManager' => '?',
        ]);
    }
}
