<?php
require_once '../view/template/header.php';
?>

<a href="index.php?action=create-bmw" class="btn btn-info">Новая машина</a>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Марка</th>
        <th>Модель</th>
        <th>Кузов</th>
        <th>Топливо</th>
        <th>Объем двигателя</th>
        <th>Цена</th>
        <!-- <th>ID</th> -->
    </tr>
    </thead>
    <tbody>
    <?php foreach ($bmw as $aboutBMW) { ?>
        <tr>
            <td><img src="../img/BMW.png" alt="<?php echo htmlspecialchars($aboutBMW->mark) ?>"></td>
            <td><?php echo htmlspecialchars($aboutBMW->model) ?></td>
            <td><?php echo htmlspecialchars($aboutBMW->carcase) ?></td>
            <td><?php echo htmlspecialchars($aboutBMW->fuel) ?></td>
            <td><?php echo htmlspecialchars($aboutBMW->power) ?></td>
            <td><?php echo htmlspecialchars($aboutBMW->price) ?></td>
            <!-- <td><?php echo htmlspecialchars($aboutBMW->id) ?></td> -->
            <td>
                <a href="index.php?action=view-bmw&id=<?= $aboutBMW->id ?>" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                <a href="index.php?action=update-bmw&id=<?= $aboutBMW->id ?>" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <a href="index.php?action=delete-bmw&id=<?= $aboutBMW->id ?>" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>




<?php
require_once '../view/template/footer.php';
?>
