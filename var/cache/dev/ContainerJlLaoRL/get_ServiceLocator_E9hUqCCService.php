<?php

namespace ContainerJlLaoRL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E9hUqCCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e9hUqCC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e9hUqCC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\HomeController::homepage' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController::delete' => ['privates', '.service_locator.3T3yShc', 'get_ServiceLocator_3T3yShcService', true],
            'App\\Controller\\NewsController::edit' => ['privates', '.service_locator.3T3yShc', 'get_ServiceLocator_3T3yShcService', true],
            'App\\Controller\\NewsController::index' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController::new' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController::show' => ['privates', '.service_locator.vPS93hZ', 'get_ServiceLocator_VPS93hZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomeController:homepage' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController:delete' => ['privates', '.service_locator.3T3yShc', 'get_ServiceLocator_3T3yShcService', true],
            'App\\Controller\\NewsController:edit' => ['privates', '.service_locator.3T3yShc', 'get_ServiceLocator_3T3yShcService', true],
            'App\\Controller\\NewsController:index' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController:new' => ['privates', '.service_locator.eoV.SqH', 'get_ServiceLocator_EoV_SqHService', true],
            'App\\Controller\\NewsController:show' => ['privates', '.service_locator.vPS93hZ', 'get_ServiceLocator_VPS93hZService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomeController::homepage' => '?',
            'App\\Controller\\NewsController::delete' => '?',
            'App\\Controller\\NewsController::edit' => '?',
            'App\\Controller\\NewsController::index' => '?',
            'App\\Controller\\NewsController::new' => '?',
            'App\\Controller\\NewsController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:homepage' => '?',
            'App\\Controller\\NewsController:delete' => '?',
            'App\\Controller\\NewsController:edit' => '?',
            'App\\Controller\\NewsController:index' => '?',
            'App\\Controller\\NewsController:new' => '?',
            'App\\Controller\\NewsController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
