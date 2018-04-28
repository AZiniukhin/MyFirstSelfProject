<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 19:07
 */

namespace App\Repository;


use App\Model\Carcase;

class CarcaseRepository extends RepositoryAbstract
{

    public function __construct(string $entityName)
    {
        parent::__construct();
        $this->entityName = $entityName;
    }

    /**
     * @return array
     */
    public function getCarcases(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM carcase;");
        $stmt->execute();
        $lastID = [];
        foreach ($stmt as $key => $row) {
            $lastID[$row['id_carcase']] = $row['carcase_c'];
        }
        return $lastID;
    }

    /**
     * @param Carcase $addCarcase
     */
    public function update(Carcase $addCarcase)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM carcase WHERE carcase_c = :carcase;");
        $stmt->execute(['carcase' => $addCarcase->carcase]);
        $carcase = '';
        if (!empty($stmt->rowCount())) {
            foreach ($stmt as $c) {
                $carcase = $c;
            }
        } else {
            $carcase = $this->pdo->prepare("INSERT INTO carcase(carcase_c) VALUE (:carcase);");
            $carcase->execute(['carcase' => $addCarcase->carcase]);
        }
    }

    public function findById($id)
    {
    }
}