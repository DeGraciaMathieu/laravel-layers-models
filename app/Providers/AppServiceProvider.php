<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Feature\Domain\ItemRepository;
use App\Feature\Infrastructure\EloquentItemRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ItemRepository::class, EloquentItemRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
