<?php

namespace CodeBros\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class SanitizeFacade
 *
 * @package CodeBros\Facade
 */
class SanitizeFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sanitize';
    }
}
