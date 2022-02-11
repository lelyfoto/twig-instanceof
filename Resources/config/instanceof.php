<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Lelyfoto\Twig\InstanceOf\Extension\InstanceOfExtension;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('twig.extension.instanceof', InstanceOfExtension::class)
        ->tag('twig.extension')
    ;
};
