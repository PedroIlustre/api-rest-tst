<?php

require __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = (new User())->findById(3);
$user->first_name = 'Luana';
$user->save();
