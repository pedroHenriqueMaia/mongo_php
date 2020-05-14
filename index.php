<?php 
    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $db=new \MongoDB\Driver\BulkWrite;

    $db->insert(['nome'=>'jorge','idade'=>77]);

    $manager->executeBulkWrite('raiz.academicos',$db);