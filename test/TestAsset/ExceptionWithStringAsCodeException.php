<?php

declare(strict_types=1);

namespace LaminasTest\ServiceManager\TestAsset;

use Exception;

final class ExceptionWithStringAsCodeException extends Exception
{
    /** @var string */
    protected $code = 'ExceptionString';
}
