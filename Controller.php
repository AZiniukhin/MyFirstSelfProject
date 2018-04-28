<?php
/**
 * Created by PhpStorm.
 * User: Cougar
 * Date: 07.01.2018
 * Time: 12:58
 */

namespace App;

use App\Model\Cars;
use App\Model\Carcase;

use App\Repository\CarRepository;
use App\Repository\CarcaseRepository;

class Controller
{
    protected $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function execute()
    {
        switch ($this->action) {
            case '':
            case 'main':
                $this->mainAction();
                break;

            //------------------------------------------------- Audi

            case 'index-audi':
                $this->indexAudiAction();
                break;
            case 'create-audi':
                $this->createAudiAction();
                break;
            case 'audi-motor-min':
                $this->audiMotorMinAction();
                break;
            case 'audi-motor-max':
                $this->audiMotorMaxAction();
                break;
            case 'audi-price-min':
                $this->audiPriceMinAction();
                break;
            case 'audi-price-max':
                $this->audiPriceMaxAction();
                break;
            case 'audi-petrol':
                $this->audiPetrolAction();
                break;
            case 'audi-diesel':
                $this->audiDieselAction();
                break;
            case 'audi-gas':
                $this->audiGasAction();
                break;
            case 'audi-all':
                $this->audiFindAllAction();
                break;
            case 'view-audi':
                $this->viewAudiAction();
                break;
            case 'update-audi':
                $this->updateAudiAction();
                break;
            case 'delete-audi':
                $this->deleteAudiAction();
                break;

            //------------------------------------------------- BMW

            case 'index-bmw':
                $this->indexBMWAction();
                break;
            case 'create-bmw':
                $this->createBMWAction();
                break;
            case 'bmw-motor-min':
                $this->bmwMotorMinAction();
                break;
            case 'bmw-motor-max':
                $this->bmwMotorMaxAction();
                break;
            case 'bmw-price-min':
                $this->bmwPriceMinAction();
                break;
            case 'bmw-price-max':
                $this->bmwPriceMaxAction();
                break;
            case 'bmw-petrol':
                $this->bmwPetrolAction();
                break;
            case 'bmw-diesel':
                $this->bmwDieselAction();
                break;
            case 'bmw-gas':
                $this->bmwGasAction();
                break;
            case 'bmw-all':
                $this->bmwFindAllAction();
                break;
            case 'view-bmw':
                $this->viewBMWAction();
                break;
            case 'update-bmw':
                $this->updateBMWAction();
                break;
            case 'delete-bmw':
                $this->deleteBMWAction();
                break;

            //------------------------------------------------- VW

            case 'index-vw':
                $this->indexVWAction();
                break;
            case 'create-vw':
                $this->createVWAction();
                break;
            case 'vw-motor-min':
                $this->vwMotorMinAction();
                break;
            case 'vw-motor-max':
                $this->vwMotorMaxAction();
                break;
            case 'vw-price-min':
                $this->vwPriceMinAction();
                break;
            case 'vw-price-max':
                $this->vwPriceMaxAction();
                break;
            case 'vw-petrol':
                $this->vwPetrolAction();
                break;
            case 'vw-diesel':
                $this->vwDieselAction();
                break;
            case 'vw-gas':
                $this->vwGasAction();
                break;
            case 'vw-all':
                $this->vwFindAllAction();
                break;
            case 'view-vw':
                $this->viewVWAction();
                break;
            case 'update-vw':
                $this->updateVWAction();
                break;
            case 'delete-vw':
                $this->deleteVWAction();
                break;

            //------------------------------------------------- addCarcase

            case 'carcase-add':
                $this->addCarcase();
                break;

            //-------------------------------------------------

            default:
                $this->errorAction();
        }
    }

//------------------------------------------------------------- function

    protected function mainAction()
    {
        require_once 'view/main.php';
    }

    protected function errorAction()
    {
        require_once 'view/error.php';
        exit();
    }

    protected function getId()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!empty($id)) {
            return $id;
        }
        $this->errorAction();
    }


//------------------------------------------------------------- addCarcase

    protected function addCarcase()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $carcaseRepository = new CarcaseRepository('carcase');
            $AllCarcases = $carcaseRepository->getCarcases();
            if (!$AllCarcases) {
                $this->errorAction();
            }
            $action = 'carcase';
            require_once 'view/addCarcase/index.php';
            return;
        }

        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $addCarcase = new Carcase($carcase);
        if ($addCarcase->validate()) {
            $carcaseRepository = new CarcaseRepository('carcase');
            $carcaseRepository->update($addCarcase);

            header('Location: index.php?action=carcase-add');
            return;
        }
        $this->errorAction();
    }

//------------------------------------------------------------- AUDI

    protected function audiMotorMinAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findMotorMin();
        require_once 'view/audi/index.php';
    }

    protected function audiMotorMaxAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findMotorMax();
        require_once 'view/audi/index.php';
    }

    protected function audiPriceMinAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findPriceMin();
        require_once 'view/audi/index.php';
    }

    protected function audiPriceMaxAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findPriceMax();
        require_once 'view/audi/index.php';
    }

    protected function audiPetrolAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findPetrol();
        require_once 'view/audi/index.php';
    }

    protected function audiDieselAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findDiesel();
        require_once 'view/audi/index.php';
    }

    protected function audiGasAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findGas();
        require_once 'view/audi/index.php';
    }

    protected function audiFindAllAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findAll();
        require_once 'view/audi/index.php';
    }

    protected function viewAudiAction()
    {
        $id = $this->getId();
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findById($id);
        if (!$audi) {
            $this->errorAction();
        }
        require_once 'view/audi/view.php';
    }

    protected function updateAudiAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $this->getId();
            $audiRepository = new CarRepository('audi');
            $audi = $audiRepository->findById($id);
            if (!$audi) {
                $this->errorAction();
            }
            $action = 'update';
            $audiCarcase = $audiRepository->getCarcase();
            require_once 'view/audi/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $id = isset($_POST['id']) ? trim($_POST['id']) : null;

        $audi = new Cars($mark, $model, $carcase, $fuel, $power, $price, $id);

        if ($audi->validate() && $audi->changeNameToID($audi)) {
            $audiRepository = new CarRepository('audi');
            $audiRepository->update($audi);

            header('Location: index.php?action=index-audi');
            return;
        }
        $this->errorAction();
    }

    protected function createAudiAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $action = 'create';

            $audiRepository = new CarRepository('audi');
            $audiCarcase = $audiRepository->getCarcase();

            require_once 'view/audi/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $audi = new Cars($mark, $model, $carcase, $fuel, $power, $price);

        if ($audi->validate() && $audi->changeNameToID($audi)) {
            $audiRepository = new CarRepository('audi');
            $audiRepository->save($audi);
        }

        header('Location: index.php?action=index-audi');
    }

    protected function indexAudiAction()
    {
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->findAll();
        require_once('view/audi/index.php');
    }

    protected function deleteAudiAction()
    {
        $id = $this->getId();
        $audiRepository = new CarRepository('audi');
        $audi = $audiRepository->deleteCarsID($id);
        header('Location: index.php?action=index-audi');
    }


//------------------------------------------------------------- BMW

    protected function bmwMotorMinAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findMotorMin();
        require_once 'view/bmw/index.php';
    }

    protected function bmwMotorMaxAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findMotorMax();
        require_once 'view/bmw/index.php';
    }

    protected function bmwPriceMinAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findPriceMin();
        require_once 'view/bmw/index.php';
    }

    protected function bmwPriceMaxAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findPriceMax();
        require_once 'view/bmw/index.php';
    }

    protected function bmwPetrolAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findPetrol();
        require_once 'view/bmw/index.php';
    }

    protected function bmwDieselAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findDiesel();
        require_once 'view/bmw/index.php';
    }

    protected function bmwGasAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findGas();
        require_once 'view/bmw/index.php';
    }

    protected function bmwFindAllAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findAll();
        require_once 'view/bmw/index.php';
    }

    protected function viewBMWAction()
    {
        $id = $this->getId();
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findById($id);
        if (!$bmw) {
            $this->errorAction();
        }
        require_once 'view/bmw/view.php';
    }

    protected function updateBMWAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $this->getId();
            $bmwRepository = new CarRepository('bmw');
            $bmw = $bmwRepository->findById($id);
            if (!$bmw) {
                $this->errorAction();
            }
            $action = 'update';
            $bmwCarcase = $bmwRepository->getCarcase();
            require_once 'view/bmw/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $id = isset($_POST['id']) ? trim($_POST['id']) : null;

        $bmw = new Cars($mark, $model, $carcase, $fuel, $power, $price, $id);

        if ($bmw->validate() && $bmw->changeNameToID($bmw)) {
            $bmwRepository = new CarRepository('bmw');
            $bmwRepository->update($bmw);

            header('Location: index.php?action=index-bmw');
            return;
        }
        $this->errorAction();
    }

    protected function createBMWAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $action = 'create';

            $bmwRepository = new CarRepository('bmw');
            $bmwCarcase = $bmwRepository->getCarcase();

            require_once 'view/bmw/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $bmw = new Cars($mark, $model, $carcase, $fuel, $power, $price);

        if ($bmw->validate() && $bmw->changeNameToID($bmw)) {
            $bmwRepository = new CarRepository('bmw');
            $bmwRepository->save($bmw);
        }

        header('Location: index.php?action=index-bmw');
    }

    protected function indexBMWAction()
    {
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->findAll();
        require_once('view/bmw/index.php');
    }

    protected function deleteBMWAction()
    {
        $id = $this->getId();
        $bmwRepository = new CarRepository('bmw');
        $bmw = $bmwRepository->deleteCarsID($id);
        header('Location: index.php?action=index-bmw');
    }


//------------------------------------------------------------- VW

    protected function vwMotorMinAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findMotorMin();
        require_once 'view/vw/index.php';
    }

    protected function vwMotorMaxAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findMotorMax();
        require_once 'view/vw/index.php';
    }

    protected function vwPriceMinAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findPriceMin();
        require_once 'view/vw/index.php';
    }

    protected function vwPriceMaxAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findPriceMax();
        require_once 'view/vw/index.php';
    }

    protected function vwPetrolAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findPetrol();
        require_once 'view/vw/index.php';
    }

    protected function vwDieselAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findDiesel();
        require_once 'view/vw/index.php';
    }

    protected function vwGasAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findGas();
        require_once 'view/vw/index.php';
    }

    protected function vwFindAllAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findAll();
        require_once 'view/vw/index.php';
    }

    protected function viewVWAction()
    {
        $id = $this->getId();
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findById($id);
        if (!$vw) {
            $this->errorAction();
        }
        require_once 'view/vw/view.php';
    }

    protected function updateVWAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $this->getId();
            $vwRepository = new CarRepository('vw');
            $vw = $vwRepository->findById($id);
            if (!$vw) {
                $this->errorAction();
            }
            $action = 'update';
            $vwCarcase = $vwRepository->getCarcase();
            require_once 'view/vw/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $id = isset($_POST['id']) ? trim($_POST['id']) : null;

        $vw = new Cars($mark, $model, $carcase, $fuel, $power, $price, $id);

        if ($vw->validate() && $vw->changeNameToID($vw)) {
            $vwRepository = new CarRepository('vw');
            $vwRepository->update($vw);

            header('Location: index.php?action=index-vw');
            return;
        }
        $this->errorAction();
    }

    protected function createVWAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $action = 'create';

            $vwRepository = new CarRepository('vw');
            $vwCarcase = $vwRepository->getCarcase();

            require_once 'view/vw/form.php';
            return;
        }

        $mark = isset($_POST['mark']) ? trim($_POST['mark']) : null;
        $model = isset($_POST['model']) ? trim($_POST['model']) : null;
        $carcase = isset($_POST['carcase']) ? trim($_POST['carcase']) : null;
        $fuel = isset($_POST['fuel']) ? trim($_POST['fuel']) : null;
        $power = isset($_POST['power']) ? trim($_POST['power']) : null;
        $price = isset($_POST['price']) ? trim($_POST['price']) : null;
        $vw = new Cars($mark, $model, $carcase, $fuel, $power, $price);

        if ($vw->validate() && $vw->changeNameToID($vw)) {
            $vwRepository = new CarRepository('vw');
            $vwRepository->save($vw);
        }

        header('Location: index.php?action=index-vw');
    }

    protected function indexVWAction()
    {
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->findAll();
        require_once('view/vw/index.php');
    }

    protected function deleteVWAction()
    {
        $id = $this->getId();
        $vwRepository = new CarRepository('vw');
        $vw = $vwRepository->deleteCarsID($id);
        header('Location: index.php?action=index-vw');
    }

}