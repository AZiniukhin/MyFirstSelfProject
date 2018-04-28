<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 08.01.2018
 * Time: 12:04
 */
namespace App\Repository;

use App\Config\ConnectionDB;

abstract class RepositoryAbstract
{
    protected $pdo;
    protected $entityName;

    public function __construct()
    {
        require_once '../config/ConnectionDB.php';
        $config = ConnectionDB::getInstance();
        $this->pdo = $config->pdo;
    }

    public abstract function findById($id);
}