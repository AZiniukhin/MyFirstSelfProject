<?php
require_once '../view/template/header.php';
?>

<div class="panel panel-default">
    <div class="panel-heading">Просмотр машины</div>
    <div class="panel-body">
        <p>
            <strong>Марка: </strong><?php echo $bmw->mark ?>
        </p>
        <p>
            <strong>Модель: </strong><?php echo $bmw->model ?>
        </p>
        <p>
            <strong>Тип кузова: </strong><?php echo $bmw->carcase ?>
        </p>
        <p>
            <strong>Тип топлива: </strong><?php echo $bmw->fuel ?>
        </p>
        <p>
            <strong>Объем двигателя: </strong><?php echo $bmw->power ?> см<sup>3</sup>
        </p>
        <p>
            <strong>Цена: </strong><?php echo $bmw->price ?>$
        </p>
    </div>
</div>

<?php
require_once '../view/template/footer.php';
?>
