<?php

namespace Csechrist\LaravelSendgrid;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Csechrist\LaravelSendgrid\Skeleton\SkeletonClass
 */
class LaravelSendgridFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-sendgrid';
    }
}
