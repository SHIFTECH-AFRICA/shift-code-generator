<?php
/**
 * -----------------------------------
 * Define the application parameters
 * ------------------------------------
 * This includes the name and the year you
 * would like the codes to be generated from
 * ---------------------------------------------
 */

use Carbon\Carbon;

return [
    'name' => env('APP_NAME', 'Shiftech Africa'),
    'year' => Carbon::create(env('YEAR_OF_START', date('Y')), now()->month, now()->day),
    'use_db' => env('USE_DATABASE', false),
];
