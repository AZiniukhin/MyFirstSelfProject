<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 19:58
 */

namespace App\Model;


class Carcase extends CarcaseAbstract
{
    public function __construct(string $carcase)
    {
        parent::__construct($carcase);
    }

    public function validate(): bool
    {
        return parent::validate();
    }
}