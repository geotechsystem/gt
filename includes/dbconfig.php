<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// $serviceAccount = ServiceAccount::fromJsonFile(DIR . '/gt22-d7558-firebase-adminsdk-degck-ee155b2f77.json');
$firebase = (new Factory())
  ->withServiceAccount(__DIR__ . '/gt22-d7558-firebase-adminsdk-degck-ee155b2f77.json')
  ->withProjectId('gt22-d7558')
  ->withDatabaseUri('https://gt22-d7558-default-rtdb.firebaseio.com');
// ->create();

$database = $firebase->createDatabase();
