<?php 
    include_once 'Book.php';
    include_once 'Customer.php';

    $newCustomer = new Customer(11, "Md", "Rushad","rushad36254");
    echo $newCustomer."\n"; 
    echo '<br>';


    

    $majid = new Customer(23, "Majid", "Bhuiyan", "majid@gmail.com");
    echo $majid;
?>