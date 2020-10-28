<?php

namespace poprigun\LaravelInteractions;

use poprigun\LaravelInteractions\Console\InteractionMakeCommand;
use Illuminate\Support\ServiceProvider;

/**
 * Class InteractionServiceProvider
 * @package poprigun\LaravelInteractions
 */
class InteractionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            InteractionMakeCommand::class,
        ]);
    }
}
