<?php

namespace App\Console\Commands;

use App\Console\Configuration\Production;
use App\Console\Configuration\Testing;
use Illuminate\Console\Command;

class GenerateEnvFile extends Command
{
    protected $signature = 'app:generate-env-file';

    protected $description = 'Generate the .env file for the application by APP_ENV.';

    private Testing $config;

    public function __construct()
    {
        $this->config = new Testing();
        parent::__construct();
    }

    public function handle()
    {
        $envTemplate = <<<EOD
APP_ENV=testing
APP_DEBUG=true
APP_URL=http://localhost
APP_KEY=base64:IZxzTJNHPMdtnloI7BMr3CnFG2krqN6Q1sTNpqevtJw=

DB_CONNECTION=sqlite
DB_DATABASE={$this->config->dbDatabase}

EOD;
/*
        if (file_exists(base_path('.env.testing'))) {
            $this->error('.env file already exists!');
            return;
        }*/

        // Write the template to the .env file
        file_put_contents(base_path('.env.testing'), $envTemplate);

        $this->info('.env file generated successfully.');
    }
}
