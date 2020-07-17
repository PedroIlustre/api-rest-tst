<?php

require __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = 'Oliver';
$user->last_name = 'Ilustre';
$user->genre = 'M';

$user->save();

$address = new Address();
$address->add($user, 'Rua Padre Anchieta','66');
$address->save();
echo '<pre>';
print_r($user);