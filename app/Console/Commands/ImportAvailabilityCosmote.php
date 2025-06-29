<?php

namespace App\Console\Commands;

use App\Models\PostalCode;
use App\Services\Cosmote\AvailabilityService;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use App\Models\StreetNumber;
use Symfony\Component\DomCrawler\Crawler;

class ImportAvailabilityCosmote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'availability-cosmote:import {code : The postal code to process}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import cosmote availability for specific postal code';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(private readonly AvailabilityService $availabilityService)
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

        $postalCode = $this->argument('code');

         if (!PostalCode::where('code', $postalCode)->exists()) {
            $this->error("Postal code {$postalCode} not found in the database.");
            return Command::FAILURE;
        }

        libxml_use_internal_errors(true);
        $numbers = StreetNumber::with('street.postalCode')
            ->whereHas('street', function ($q) {
                $q->where('cosmote_street_name', '!=', '');
            })
            ->whereHas('street.postalCode', function ($q) use ($postalCode){
                $q->where('code', $postalCode);
            })->get();

        foreach ($numbers as $number) {
            try {
                $this->comment("Checking: $number->description...");
                $result = $this->availabilityService->checkAvailability($number);
                $this->comment("Result: $result");
                $number->cosmote_200_ftth = $result;
                $number->save();
            } catch (GuzzleException|Exception $e) {
                $this->error($e->getMessage());
            }
        }
        return self::SUCCESS;
    }
}
