<?php

    $db_name = 'luke_products';
    $db_user = 'luke';
    $db_pass = 'luek9889';


    $db  = new PDO("mysql:host=localhost;dbname=$da_name;charset=utf8mb4", $db_user, $db_pass);

    $statement = $db->prepare('SELECT id,name, price,description FROM products');
    $statement->execute();
    
    $products = $statement->fetchAll();

    header('Content-Type: application/json');
    echo json_encode($products);
?>