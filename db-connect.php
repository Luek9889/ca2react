<?php

    $db_name = 'luke_products';
    $db_user = 'luke';
    $db_pass = 'luek9889';

    try{
    $db  = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);

    $statement = $db->prepare('SELECT id,name, price,description FROM products');
    $statement->execute();
    
    $products = $statement->fetchAll();

    header('Content-Type: application/json');
    echo json_encode($products);
    }
    catch (Exception $e) {
        echo 'PDO error ';
        
    }
?>