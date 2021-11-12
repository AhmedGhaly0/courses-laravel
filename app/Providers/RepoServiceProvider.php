<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\TeacherRepositoryInterface;
use App\Repository\TeacherRepository;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
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
