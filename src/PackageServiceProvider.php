<?php

namespace Andrewhlleung\Youtubetools;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    protected $commands = [
            RobotCombineMedia::class
            ,RobotMp3Cut::class
            ,RobotTest::class
    ];

    public function boot()
    {
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }
    }
}