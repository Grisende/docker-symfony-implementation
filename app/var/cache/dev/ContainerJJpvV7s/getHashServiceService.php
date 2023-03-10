<?php

namespace ContainerJJpvV7s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHashServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\HashService' shared autowired service.
     *
     * @return \App\Service\HashService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Traits/SetTotalPagesTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Service/HashService.php';
        include_once \dirname(__DIR__, 4).'/src/Helper/HashHelper.php';
        include_once \dirname(__DIR__, 4).'/src/Presenter/HashPresenter.php';

        return $container->privates['App\\Service\\HashService'] = new \App\Service\HashService(($container->privates['App\\Repository\\HashRepository'] ?? $container->load('getHashRepositoryService')), new \App\Helper\HashHelper(), new \App\Presenter\HashPresenter());
    }
}
