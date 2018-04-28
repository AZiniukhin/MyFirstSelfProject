<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 07.01.2018
 * Time: 12:47
 */

spl_autoload_register(function ($className){
    include_once getClassPath($className).'.php';
});

function getClassPath(string $className):string
{
    $registeredClasses = [
        'App\Controller' => 'Controller',

        'App\Model\ModelAbstract' => 'model/ModelAbstract',
        'App\Model\CarAbstract' => 'model/CarAbstract',
        'App\Model\CarcaseAbstract' => 'model/CarcaseAbstract',

        'App\Model\Cars' => 'model/Cars',
        'App\Model\Carcase' => 'model/Carcase',

        'App\Enum\CarIDEnum' => 'enum/CarIDEnum',

        'App\Config\ConnectionDB' => 'config/ConnectionDB',
        'App\Repository\RepositoryAbstract' => 'repository/RepositoryAbstract',

        'App\Repository\CarRepository' => 'repository/CarRepository',
        'App\Repository\CarcaseRepository' => 'repository/CarcaseRepository'

    ];

    return $registeredClasses[$className];
}