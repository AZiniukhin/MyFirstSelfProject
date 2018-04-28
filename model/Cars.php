<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 15:14
 */

namespace App\Model;



class Cars extends CarAbstract
{
    public $id;

    public function __construct(string $mark, string $model, string $carcase, string $fuel, string $power, string $price, int $id = null)
    {
        parent::__construct($mark, $model, $carcase, $fuel, $power, $price);
        $this->id = $id;
    }

    public function validate(): bool
    {
        return parent::validate();
    }

    public function changeNameToID($mark)
    {
        return parent::changeNameToID($mark);
    }
}