<?php

declare(strict_types=1);

namespace LaminasTest\ServiceManager\TestAsset;

use interop\container\containerinterface;
use Laminas\ServiceManager\Initializer\InitializerInterface;
use stdClass;

final class SimpleInitializer implements InitializerInterface
{
    /** {@inheritDoc} */
    public function __invoke(containerinterface $container, $instance)
    {
        if (! $instance instanceof stdClass) {
            return;
        }

        $instance->foo = 'bar';
    }
}
