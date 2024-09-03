<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('make:order', ['user_id' => rand(1, 100), 'amount' => rand(10, 1000)])->everyFiveSeconds();

//->cron('15 3 * * *'); 
//cron se usa para definir una fecha de ejecución, (min hora día mes día_semana (1=lunes...), * = todos)
// La ejecución anterior del cron se realiza todos los días a las 3:15 de la madrugada
// Cuando la App está en producción es nesario que los cron jobs del server también ejecuten los comandos