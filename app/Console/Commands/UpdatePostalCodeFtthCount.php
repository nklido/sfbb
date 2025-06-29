<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdatePostalCodeFtthCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ftth_count:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postalCodes = \App\Models\PostalCode::with('streets.numbers')->whereBetween('code', [10443,12461])->orderBy('code')->get();

        foreach ($postalCodes as $postalCode) {
            $count = \App\Models\StreetNumber::where('cosmote_200_ftth', 1)->whereHas('street.postalCode', function ($q) use ($postalCode) {
                $q->where('code', $postalCode->code);
            })->count();

            $this->comment("Updating: $postalCode->code, count: $count");
            $this->comment('------------------------------------------');
            $postalCode->ftth_count = $count;
            $postalCode->save();
        }

        return Command::SUCCESS;
    }
}
