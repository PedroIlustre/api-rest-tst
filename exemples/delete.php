<?php

require __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = (new User())->findById(3);
echo '<pre>';print_r($user);die;
$user->destroy();
