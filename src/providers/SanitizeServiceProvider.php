<?php

namespace CodeBros\Providers;

use CodeBros\Facade\SanitizeFacade;
use Illuminate\Support\ServiceProvider;

/**
 * Class SanitizeServiceProvider
 *
 * @package CodeBros\Providers
 */
class SanitizeServiceProvider extends ServiceProvider
{
    /**
     * Register new instances for the current Laravel installation
     *
     * @return void
     */
    public function register(): void
    {
        // Register our Facade
        $this->app->bind('Sanitize', function () {
            return new SanitizeFacade;
        });
    }
}
