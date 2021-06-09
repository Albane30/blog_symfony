<?php

namespace ContainerVldIGVP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_UploadHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/AbstractHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/UploadHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjectorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjector.php';

        $a = ($container->privates['vich_uploader.storage.file_system'] ?? $container->getVichUploader_Storage_FileSystemService());

        return $container->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($container->privates['vich_uploader.property_mapping_factory'] ?? $container->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
