<?php

namespace App\Providers;

use League\CommonMark\Environment;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function () {
            $environment = Environment::createCommonMarkEnvironment();

            return new CommonMarkConverter([
                'allow_unsafe_links' => false,
                'html_input' => 'strip'
            ], $environment);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
