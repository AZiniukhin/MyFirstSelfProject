<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 15:49
 */

namespace Test;

use App\Model\Cars;
use PHPUnit\Framework\TestCase;


class CarTest extends TestCase
{
    public function testGetTooSmallString()
    {
        include_once 'model/CarAbstract.php';
        include_once 'model/Cars.php';

        $cars = new Cars('a', 'b', 'c', 'f', 'p', '12');
        $this->assertFalse($cars->validate());
    }

    public function testGetTooBigString()
    {
        include_once 'model/CarAbstract.php';
        include_once 'model/Cars.php';

        $cars = new Cars('asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu', 'vk', 'vk', 'vk', 'vk', 'vk');
        $this->assertFalse($cars->validate());
        $cars = new Cars('vk', 'asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu', 'vk', 'vk', 'vk', 'vk');
        $this->assertFalse($cars->validate());
        $cars = new Cars('vk', 'vk', 'asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu', 'vk', 'vk', 'vk');
        $this->assertFalse($cars->validate());
        $cars = new Cars('vk', 'vk', 'vk', 'asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu', 'vk', 'vk');
        $this->assertFalse($cars->validate());
        $cars = new Cars('vk', 'vk', 'vk', 'vk', 'asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu', 'vk');
        $this->assertFalse($cars->validate());
        $cars = new Cars('vk', 'vk', 'vk', 'vk', 'vk', 'asdfghjklqwertyuiopasdfghjklzxcvbnmasdfghjklqwertyu');
        $this->assertFalse($cars->validate());
    }

    public function testGetTooTrueString()
    {
        include_once 'model/CarAbstract.php';
        include_once 'model/Cars.php';

        $cars = new Cars('BMW', 'M5', 'coupe', 'petrol', '3000', '12000');
        $this->assertTrue($cars->validate());
    }
}