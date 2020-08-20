<?php

namespace Csechrist\LaravelSendgrid\Tests;

use Orchestra\Testbench\TestCase;
use Csechrist\LaravelSendgrid\LaravelSendgridServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelSendgridServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
