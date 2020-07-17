<?php

require __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$list = $user->find()->fetch(true);


/** @var $userItem User */
foreach($list as $userItem){
    echo "USER";

    # Pega valor de uma coluna específica (neste caso 'first_name')
    var_dump($userItem->first_name);echo "<br>";
    
    # Pega valor de todo objeto active record (ORM - Object Relational Mapper)
    #var_dump($userItem->data());
    
    # Pega valor de endereço do objeto ativo 'user'
    foreach($userItem->addresses() as $userAddresses){
        var_dump($userAddresses->street);echo "<br>";  
    }  
}


// $adress = new Adress();
// $list2 = $adress->find()->fetch(true);
// echo "ADRESS";
// foreach($list2 as $adressItem){
    # Pega valor de uma coluna específica (neste caso 'first_name')
    //var_dump($adressItem->street);
    //echo "<br>";
    
    # Pega valor de todo objeto active record (ORM - Object Relational Mapper)
    //var_dump($adressItem->data());
    //echo "<br>";

    # Salva valores de endereço para o objeto ativo 'user'
    //var_dump($adressItem->save($arr_itens));
// }