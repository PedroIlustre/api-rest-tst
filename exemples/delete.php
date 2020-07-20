<?php

require __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = (new User())->findById(19);

if($user){
    $user->destroy();
} else {
    echo '<pre>';print_r($user);die;
}

