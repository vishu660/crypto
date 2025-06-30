<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


use App\Console\Commands\DistributeRoi;

class Kernel extends ConsoleKernel
{
   
    protected $commands = [
        \App\Console\Commands\DistributeRoi::class,
    ];

    
    protected function schedule(Schedule $schedule): void
    {
       
       // $schedule->command('app:distribute-roi')->dailyAt('00:00');

        // 🔧 Optional for testing:
         $schedule->command('app:distribute-roi')->everyMinute();
    }


    protected function commands(): void
    {
        
        $this->load(__DIR__ . '/Commands');

       
        require base_path('routes/console.php');
    }
}
