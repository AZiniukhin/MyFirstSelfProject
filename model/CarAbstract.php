<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 13:33
 */

namespace App\Model;

use App\Enum\CarIDEnum;

abstract class CarAbstract
{
    public $mark;
    public $model;
    public $carcase;
    public $fuel;
    public $power;
    public $price;

    public function __construct(string $mark, string $model, string $carcase, string $fuel, string $power, string $price)
    {
        $this->mark = $mark;
        $this->model = $model;
        $this->carcase = $carcase;
        $this->fuel = $fuel;
        $this->power = $power;
        $this->price = $price;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        if (iconv_strlen($this->mark) > 50 || iconv_strlen($this->mark) < 2) {
            return false;
        }
        if (iconv_strlen($this->model) > 50 || iconv_strlen($this->model) < 2) {
            return false;
        }
        if (iconv_strlen($this->carcase) > 5 || iconv_strlen($this->carcase) < 1) {
            return false;
        }
        if (iconv_strlen($this->fuel) > 50 || iconv_strlen($this->fuel) < 1) {
            return false;
        }
        if (iconv_strlen($this->power) > 50 || iconv_strlen($this->power) < 2) {
            return false;
        }
        if (iconv_strlen($this->price) > 30 || iconv_strlen($this->price) < 1) {
            return false;
        }
        return true;
    }


    /**
     * @param $mark
     * @return mixed
     */
    public function changeNameToID($mark)
    {
        switch ($mark->mark) {
            case 'Audi':
                $mark->mark = CarIDEnum::AUDI_ID;
                break;
            case 'BMW':
                $mark->mark = CarIDEnum::BMW_ID;
                break;
            case 'VW':
                $mark->mark = CarIDEnum::VW_ID;
                break;
            default:
                $mark->mark = null;
        }

        switch ($mark->fuel) {
            case 'petrol':
                $mark->fuel = CarIDEnum::PETROL_ID;
                break;
            case 'diesel':
                $mark->fuel = CarIDEnum::DIESEL_ID;
                break;
            case 'gas':
                $mark->fuel = CarIDEnum::GAS_ID;
                break;
            default:
                $mark->fuel = null;
        }
        return $mark;
    }
}