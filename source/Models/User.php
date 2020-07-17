<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct(){
        parent::__construct("users",["first_name","last_name"]);
    }

    public function addresses (){
        $user_id = $this->id;
        $address = new Adress();

        $f = $address->find("user_id = :uid","uid=$user_id");
        print_r($f);die;
        return $f;
        // return $address->find("user_id = :uid","uid=$user_id")->fetch(true);
    }
}