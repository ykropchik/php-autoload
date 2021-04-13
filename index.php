<?php 

    function customAutoload(string $className)
    {    
        $path = str_replace('Zoo\\', DIRECTORY_SEPARATOR, $className);
        require_once __DIR__ . "/src/$path.php";
    }

    spl_autoload_register('customAutoload');

    $zoo = new \Zoo\Zoo();
    $lion = new \Zoo\Lion(15);
    $giraffe = new \Zoo\Giraffe(5);
    $zebras = new \Zoo\Zebras(10);
    $lion->voice();
    $giraffe->voice();
    $zebras->voice();

    $zoo->addAnimal(1, $lion);
    $zoo->addAnimal(12, $giraffe);
    $zoo->addAnimal(54, $zebras);
    $zoo->printZoo();
?>