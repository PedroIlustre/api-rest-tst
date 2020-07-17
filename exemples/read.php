<?php

require __DIR__.'/../vendor/autoload.php';
/*
use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error){
    var_dump($error);
    echo $error->getMessage();
    die();
}

$query = $conn->query("SELECT * FROM  users");
var_dump($query->fetchAll());
*/
use Source\Models\User;
use Source\Models\Adress;

$user = new User();
$list = $user->find()->fetch(true);
echo "USER";
/** @var $userItem User */
foreach($list as $userItem){
    # Pega valor de uma coluna específica (neste caso 'first_name')
    var_dump($userItem->first_name);
    echo "<br>";
    # Pega valor de todo objeto active record (ORM - Object Relational Mapper)
    //var_dump($userItem->data());
    //echo "<br>";
    
    # Pega valor de endereço do objeto ativo 'user'
    var_dump($userItem->addresses());

    echo "<br>";
    echo "<br>";

    
}

$adress = new Adress();
$list2 = $adress->find()->fetch(true);
echo "ADRESS";
foreach($list2 as $adressItem){
    # Pega valor de uma coluna específica (neste caso 'first_name')
    //var_dump($adressItem->street);
    //echo "<br>";
    
    # Pega valor de todo objeto active record (ORM - Object Relational Mapper)
    //var_dump($adressItem->data());
    //echo "<br>";

    # Salva valores de endereço para o objeto ativo 'user'
    //var_dump($adressItem->save($arr_itens));
}