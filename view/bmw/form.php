<?php
require_once '../view/template/header.php';
?>


<form method="POST" action="index.php?action=<?= $action ?>-bmw">
    <input type="hidden" id="id" name="id" value="<?= isset($bmw->id) ? $bmw->id : '' ?>">

    <div class="form-group">
        <label for="mark" class="lab">Марка:<br/>
            <select class="form-control" id="mark-name" name="mark">
                <option class="form-control" value="BMW">BMW</option>
                <option class="form-control" value="Audi">Audi</option>
                <option class="form-control" value="VW">VW</option>
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="model">Модель:</label>
        <input type="text" class="form-control" id="model-name" name="model" placeholder="Модель машины"
               value="<?= isset($bmw->model) ? $bmw->model : '' ?>">
    </div>

    <div class="form-group">
        <label for="carcase" class="lab">Тип кузова: <?= isset($bmw->carcase) ? '(' . $bmw->carcase . ')' : '' ?><br/>
            <select class="form-control" name="carcase">
                <?php foreach ($bmwCarcase as $id_carcase => $carcase_c) {?>
                    <option class="form-control" value="<?php echo $id_carcase; ?>"><?php echo $carcase_c; ?></option>
                <?php } ?>
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="fuel" class="lab">Тип топлива: <?= isset($bmw->fuel) ? '(' . $bmw->fuel . ')' : '' ?><br/>
            <select class="form-control" name="fuel">
                <option class="form-control" value="petrol">petrol</option>
                <option class="form-control" value="diesel">diesel</option>
                <option class="form-control" value="gas">gas</option>
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="power">Объем двигателя:</label>
        <input type="text" class="form-control" id="power" name="power" placeholder="Объем двигателя"
               value="<?= isset($bmw->power) ? $bmw->power : '' ?>">
    </div>
    <div class="form-group">
        <label for="price">Цена:</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Цена"
               value="<?= isset($bmw->price) ? $bmw->price : '' ?>">
    </div>
    <button type="submit" class="btn btn-default">Отправить</button>

</form>


<?php
require_once '../view/template/footer.php';
?>
