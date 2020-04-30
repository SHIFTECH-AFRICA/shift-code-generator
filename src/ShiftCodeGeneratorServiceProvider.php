<?php


namespace ShiftechAfrica\CodeGenerator;


use Illuminate\Support\ServiceProvider;

class ShiftCodeGeneratorServiceProvider extends ServiceProvider
{
    /**
     * ----------------------------------------------------
     * define the boot method and the register method here
     * ----------------------------------------------------
     * @return void
     */
    public function boot()
    {
        /**
         * ------------------------------
         * load the migrations here
         * ------------------------------
         */
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        /**
         * ---------------------------
         * load configuration file
         * ---------------------------
         */
        $this->mergeConfigFrom(
            __DIR__ . '/config/shift-code-generator.php', 'shiftcodegenerator'
        );

        /**
         * ---------------------------
         * publishing the config file
         * ---------------------------
         */
        $this->publishes([
            __DIR__ . '/config/shift-code-generator.php.php' => config_path('shift-code-generator.php'),
        ], 'config');

        /**
         * ---------------------------------------------
         * publish the migrations to the developer side
         * here
         * ---------------------------------------------
         */
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * ------------------------------
     * Register here for any service
     * like the facades here
     * ------------------------------
     * @return void
     */
    public function register()
    {
        //
    }
}
