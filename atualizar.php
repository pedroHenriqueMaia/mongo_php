<?php 
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $up=new \MongoDB\Driver\BulkWrite;

    $up->update(['nome'=>'pedro maia'],['$set'=>['nome'=>'pedro henrique maia']]);

    $manager->executeBulkWrite('raiz.academicos', $up);