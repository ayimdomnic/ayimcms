<?php

namespace Ayimdomnic\CMS;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Ayimdomnic\CMS\Providers\Auth\AuthServiceProvider;

Class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->register([
            //list all the service providers from the ServiceProviders folder
        ]);
    }
}