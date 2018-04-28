<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 19:53
 */

namespace App\Model;


abstract class CarcaseAbstract
{
    public $carcase;

    /**
     * CarcaseAbstract constructor.
     * @param string $carcase
     */
    public function __construct(string $carcase)
    {
        $this->carcase = $carcase;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        if (iconv_strlen($this->carcase) > 15 || iconv_strlen($this->carcase) < 2) {
            return false;
        }
        return true;
    }
}