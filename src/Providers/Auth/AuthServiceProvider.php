<?php

namespace Ayimdomnic\CMS\Providers\Auth;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [];
    
       /*
        ***********************************************************
        ***********************************************************
        * Here is the boot method tha instantiates the Gate
        ***********************************************************
        ***********************************************************
        * Reigister and force a default driver in case of multiple 
        * Models handling Auth
        */ 
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }

    public function register()
    {
        parent::register();
        $this->registerDefaultAuthDriver();
    }

    protected function registerDefaultAuthDriver()
    {
        auth()->shouldUse(request()->section());
    }
}