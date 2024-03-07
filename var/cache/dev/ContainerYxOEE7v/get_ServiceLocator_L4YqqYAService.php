<?php

namespace ContainerYxOEE7v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L4YqqYAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l4YqqYA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l4YqqYA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdresseController::delete' => ['privates', '.service_locator.Tf6Ed0O', 'get_ServiceLocator_Tf6Ed0OService', true],
            'App\\Controller\\AdresseController::edit' => ['privates', '.service_locator.Tf6Ed0O', 'get_ServiceLocator_Tf6Ed0OService', true],
            'App\\Controller\\AdresseController::fact' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdresseController::index' => ['privates', '.service_locator.Gx7Gojr', 'get_ServiceLocator_Gx7GojrService', true],
            'App\\Controller\\AdresseController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdresseController::show' => ['privates', '.service_locator.VoWVcA9', 'get_ServiceLocator_VoWVcA9Service', true],
            'App\\Controller\\AeroboxeController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BaController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BeaController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BpController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\CartController::addToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController::removeAll' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController::removeToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CommandeController::prepareOrder' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\FormedeboxeController::index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.QaaDzHL', 'get_ServiceLocator_QaaDzHLService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\StripeController::createCharge' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\StripeController::index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdresseController:delete' => ['privates', '.service_locator.Tf6Ed0O', 'get_ServiceLocator_Tf6Ed0OService', true],
            'App\\Controller\\AdresseController:edit' => ['privates', '.service_locator.Tf6Ed0O', 'get_ServiceLocator_Tf6Ed0OService', true],
            'App\\Controller\\AdresseController:fact' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdresseController:index' => ['privates', '.service_locator.Gx7Gojr', 'get_ServiceLocator_Gx7GojrService', true],
            'App\\Controller\\AdresseController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdresseController:show' => ['privates', '.service_locator.VoWVcA9', 'get_ServiceLocator_VoWVcA9Service', true],
            'App\\Controller\\AeroboxeController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BaController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BeaController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\BpController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\CartController:addToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController:removeAll' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CartController:removeToCart' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\CommandeController:prepareOrder' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\FormedeboxeController:index' => ['privates', '.service_locator.erPjUdA', 'get_ServiceLocator_ErPjUdAService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.QaaDzHL', 'get_ServiceLocator_QaaDzHLService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\StripeController:createCharge' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'App\\Controller\\StripeController:index' => ['privates', '.service_locator.IxD9RLm', 'get_ServiceLocator_IxD9RLmService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdresseController::delete' => '?',
            'App\\Controller\\AdresseController::edit' => '?',
            'App\\Controller\\AdresseController::fact' => '?',
            'App\\Controller\\AdresseController::index' => '?',
            'App\\Controller\\AdresseController::new' => '?',
            'App\\Controller\\AdresseController::show' => '?',
            'App\\Controller\\AeroboxeController::index' => '?',
            'App\\Controller\\BaController::index' => '?',
            'App\\Controller\\BeaController::index' => '?',
            'App\\Controller\\BpController::index' => '?',
            'App\\Controller\\CartController::addToCart' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\CartController::removeAll' => '?',
            'App\\Controller\\CartController::removeToCart' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::prepareOrder' => '?',
            'App\\Controller\\FormedeboxeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StripeController::createCharge' => '?',
            'App\\Controller\\StripeController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdresseController:delete' => '?',
            'App\\Controller\\AdresseController:edit' => '?',
            'App\\Controller\\AdresseController:fact' => '?',
            'App\\Controller\\AdresseController:index' => '?',
            'App\\Controller\\AdresseController:new' => '?',
            'App\\Controller\\AdresseController:show' => '?',
            'App\\Controller\\AeroboxeController:index' => '?',
            'App\\Controller\\BaController:index' => '?',
            'App\\Controller\\BeaController:index' => '?',
            'App\\Controller\\BpController:index' => '?',
            'App\\Controller\\CartController:addToCart' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\CartController:removeAll' => '?',
            'App\\Controller\\CartController:removeToCart' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:prepareOrder' => '?',
            'App\\Controller\\FormedeboxeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StripeController:createCharge' => '?',
            'App\\Controller\\StripeController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
