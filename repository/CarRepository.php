<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 14.01.2018
 * Time: 14:50
 */

namespace App\Repository;

use App\Model\Cars;

class CarRepository extends RepositoryAbstract
{
    public function __construct(string $entityName)
    {
        parent::__construct();
        $this->entityName = $entityName;
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}' AND gen.id = :id;");
        $stmt->execute(['id' => $id]);
        foreach ($stmt as $row) {
            return new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return null;
    }

    /**
     * @return array
     */
    public function findMotorMin()
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}'  
                                                ORDER BY power.power_p;");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findMotorMax()
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}'  
                                                ORDER BY power.power_p DESC;");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }


    /**
     * @return array
     */
    public function findPriceMin(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}'  
                                                ORDER BY price.price_p;");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findPriceMax(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}'  
                                                ORDER BY price.price_p DESC;");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findPetrol(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}' AND fuel.fuel_f = 'petrol';");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findDiesel(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}' AND fuel.fuel_f = 'diesel';");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findGas(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                                JOIN gen ON mark.id_mark=gen.id_mark
                                                JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                                JOIN model ON model.id_model=gen.id_model
                                                JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                                JOIN power ON power.id_power=gen.id_power
                                                JOIN price ON price.id_price=gen.id_price
                                                WHERE mark.mark_m ='{$this->entityName}' AND fuel.fuel_f = 'gas';");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->prepare("SELECT mark.mark_m, model.model_m, carcase.carcase_c, fuel.fuel_f, power.power_p, price.price_p, gen.id FROM mark
                                              JOIN gen ON mark.id_mark=gen.id_mark
                                              JOIN carcase ON carcase.id_carcase=gen.id_carcase
                                              JOIN model ON model.id_model=gen.id_model
                                              JOIN fuel ON fuel.id_fuel=gen.id_fuel
                                              JOIN power ON power.id_power=gen.id_power
                                              JOIN price ON price.id_price=gen.id_price
                                              WHERE mark.mark_m = '{$this->entityName}';");
        $stmt->execute();
        $cars = [];
        foreach ($stmt as $row) {
            $cars[] = new Cars($row['mark_m'], $row['model_m'], $row['carcase_c'], $row['fuel_f'], $row['power_p'], $row['price_p'], $row['id']);
        }
        return $cars;
    }


    public function getCarcase()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM carcase;");
        $stmt->execute();
        $carcase = [];
        foreach ($stmt as $key => $row) {
            $carcase[$row['id_carcase']] = $row['carcase_c'];
        }
        return $carcase;
    }


    /**
     * @param Cars $cars
     */
    public function update(Cars $cars)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM gen WHERE id = :id");
        $stmt->execute(['id' => $cars->id]);
        $genBackId = '';
        foreach ($stmt as $row) {
            $genBackId = new Cars($row['id_mark'], $row['id_model'], $row['id_carcase'], $row['id_fuel'], $row['id_power'], $row['id_price'], $row['id']);
        }

        $modelPowerPrice = $this->pdo->prepare("UPDATE model m, power pow, price p SET m.model_m = :model, pow.power_p = :power, p.price_p = :price
                                                          WHERE m.id_model = :id_model AND pow.id_power = :id_power AND p.id_price = :id_price;");
        $modelPowerPrice->execute([
            'model' => $cars->model,
            'power' => $cars->power,
            'price' => $cars->price,
            'id_model' => $genBackId->model,
            'id_power' => $genBackId->power,
            'id_price' => $genBackId->price
        ]);

        $gen = $this->pdo->prepare("UPDATE gen SET id_mark = :mark, id_carcase = :carcase, id_model = :model, 
                                                            id_fuel = :fuel, id_power = :power, id_price = :price WHERE id = :id;");
        $gen->execute([
            'id' => $cars->id,
            'mark' => $cars->mark,
            'model' => $genBackId->model,
            'carcase' => $cars->carcase,
            'fuel' => $cars->fuel,
            'power' => $genBackId->power,
            'price' => $genBackId->price
        ]);
    }

    /**
     * @param Cars $cars
     */
    public function save(Cars $cars)
    {
        // check for the existence of model data in the table 'model'

        $model = $this->pdo->prepare("SELECT * FROM model WHERE model_m = :model;");
        $model->execute(['model' => $cars->model]);
        $model_m = '';
        if (!empty($model->rowCount())) {
            foreach ($model as $m) {
                $model_m = $m;
            }
            $cars->model = $model_m['id_model'];
        } else {
            $model = $this->pdo->prepare("INSERT INTO model (model_m) VALUE (:model);");
            $model->execute(['model' => $cars->model]);
            $cars->model = $this->pdo->lastInsertId();
        }

        // check for the existence of power data in the table 'power'

        $power = $this->pdo->prepare("SELECT * FROM power WHERE power_p = :power;");
        $power->execute(['power' => $cars->power]);
        $power_p = '';
        if (!empty($power->rowCount())) {
            foreach ($power as $p) {
                $power_p = $p;
            }
            $cars->power = $power_p['id_power'];
        } else {
            $model = $this->pdo->prepare("INSERT INTO power (power_p) VALUE (:power);");
            $model->execute(['power' => $cars->power]);
            $cars->power = $this->pdo->lastInsertId();
        }

        // insert data of price in the table 'price'

        $price = $this->pdo->prepare("INSERT INTO price (price_p) VALUE (:price);");
        $price->execute(['price' => $cars->price]);
        $cars->price = $this->pdo->lastInsertId();

        // insert assembled id's in the table 'gen'

        $gen = $this->pdo->prepare("INSERT INTO gen (id_mark, id_carcase, id_model, id_fuel, id_power, id_price) 
                                              VALUE (:mark, :carcase, :model, :fuel, :power, :price);");
        $gen->execute([
            'mark' => $cars->mark,
            'carcase' => $cars->carcase,
            'model' => $cars->model,
            'fuel' => $cars->fuel,
            'power' => $cars->power,
            'price' => $cars->price
        ]);
    }

    /**
     * @param $id
     */
    public function deleteCarsID($id)
    {
        $deleteGen = $this->pdo->prepare("DELETE gen FROM gen WHERE id = :id");
        $deleteGen->execute(['id' => $id]);
    }

}