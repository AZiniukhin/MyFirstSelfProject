<?php
require_once '../view/template/header.php';
?>


    <form method="POST" action="index.php?action=<?= $action ?>-add">
        <div class="form-group">
            <br/>
            <label for="carcase" class="lab">Добавить новый вид кузова:<br/>
                <input type="text" class="form-control" id="carcase" name="carcase" placeholder="Вид кузова" value="">
            </label>
        </div>

        <button type="submit" class="btn btn-default">Отправить</button>
    </form>

    <div class="page-header text-center">
        <h1><img src="../../img/carcase.png" alt="Logo"></h1>
    </div>

<?php
require_once '../view/template/footer.php';
?>