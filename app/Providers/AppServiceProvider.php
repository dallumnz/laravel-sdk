<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Vite;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Configure the application services
        $this->configureEnvironment();
        $this->configureModels();
        $this->configureDates();
        $this->configureSettings();
    }

    public function configureEnvironment(): void
    {
        if ($this->app->isProduction()) {
            // Set prohibitive mode for destructive commands in production
            DB::prohibitDestructiveCommands();
            // Only use HTTPS in production
            URL::forceScheme('https');
        }
    }

    public function configureModels(): void
    {
        // Optional: Allow mass assignment without using guarded attributes
        // Model::unguard();

        // Set strict mode for models to ensure that only defined attributes can be mass assigned
        Model::shouldBeStrict();
        // Set automatic eager loading of relationships to prevent N+1 query issues
        Model::preventLazyLoading();
    }

    public function configureDates(): void
    {
        // Set immutable dates for all models
        Date::use(CarbonImmutable::class);
    }

    public function configureSettings(): void
    {
        if (Schema::hasTable('settings')) {
            $settings = Setting::all()->pluck('value', 'key')->toArray();
            config(['settings' => $settings]);
        }
    }
}
