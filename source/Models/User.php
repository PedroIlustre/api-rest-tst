<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct(){
        parent::__construct("users",["first_name","last_name"]);
    }

    public function addresses (){
        $address = new Address();
        return $address->find("user_id = :uid","uid={$this->id}")->fetch(true);
    }
}