<?php
require_once '../view/template/header.php';
?>

<div class="panel panel-default">
    <div class="panel-heading">Просмотр машины</div>
    <div class="panel-body">
        <p>
            <strong>Марка: </strong><?php echo $vw->mark ?>
        </p>
        <p>
            <strong>Модель: </strong><?php echo $vw->model ?>
        </p>
        <p>
            <strong>Тип кузова: </strong><?php echo $vw->carcase ?>
        </p>
        <p>
            <strong>Тип топлива: </strong><?php echo $vw->fuel ?>
        </p>
        <p>
            <strong>Объем двигателя: </strong><?php echo $vw->power ?> см<sup>3</sup>
        </p>
        <p>
            <strong>Цена: </strong><?php echo $vw->price ?>$
        </p>
    </div>
</div>

<?php
require_once '../view/template/footer.php';
?>
