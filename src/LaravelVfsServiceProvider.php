<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use League\Flysystem\Vfs\VfsAdapter;
use VirtualFileSystem\FileSystem as Vfs;

class LaravelVfsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['filesystem']->extend('vfs', function() {
            $vfs = new Vfs();
            $adapter = new VfsAdapter($vfs);

            return new Filesystem($adapter);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
