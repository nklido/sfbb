<?php

namespace App\Console\Commands;

use App\Models\PostalCode;

use Illuminate\Console\Command;

class ImportStreets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'streets:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import streets';

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
        $postalCodes = PostalCode::all();

        $client = new \GuzzleHttp\Client(['base_uri' => 'https://submit.sfbb.gr/EligibilityCheck.aspx']);

        foreach ($postalCodes as $index => $postalCode) {
            $this->comment("Index: $index: Requesting Postal Code $postalCode->code");
            $res = $client->request('GET', "?zip=$postalCode->code");

            $contents = $res->getBody()->getContents();

            $start = strpos($contents, 'var _availableAddresses = ');
            $end = strpos($contents, '];', $start);

            $streets = json_decode(substr($contents, $start + 26, $end - ($start + 27) + 2));

            foreach ($streets as $street) {
                $postalCode->streets()->create(['name' => $street]);
            }
            $this->comment('------------------------------------------------------------------------------');
        }

        return Command::SUCCESS;
    }
}
