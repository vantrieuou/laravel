<?php

namespace App\Console\Configuration;

class Testing extends Production
{
    public string $dbPrefix = 'testing_';

    public function __construct()
    {
        $this->dbDatabase = database_path('database.sqlite_testing');
    }
}
