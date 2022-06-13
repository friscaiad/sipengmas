<?php

require_once __DIR__ . '/vendor/autoload.php';

use MeiliSearch\Client;

$client = new Client('http://127.0.0.1:7700');
$client->index('pengmas')->updateSettings([
    'filterableAttributes' => [
        'periode.id',
        'prodi.id',
        'skema.id',
        'departemen.id'
    ]
    ]);