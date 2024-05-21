<?php

namespace App\Console\Configuration;

class Production
{
    public string $dbURL;
    public string $dbHost;
    public int $dbPort = 5432;
    public string $dbDatabase;
    public string $dbUsername;
    public string $dbPassword;
    public string $dbCharset = 'utf8';
    public string $dbPrefix = '';
    public bool $dbPrefixIndex = true;
    public string $dbSearchPath = 'public';
    public string $dbSSLMode = 'prefer';

}
