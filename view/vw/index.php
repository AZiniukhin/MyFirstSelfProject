<?php
require_once '../view/template/header.php';
?>

<a href="index.php?action=create-vw" class="btn btn-info">Новая машина</a>

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
    <?php foreach ($vw as $aboutVW) { ?>
        <tr>
            <td><img src="../img/VW.png" alt="<?php echo htmlspecialchars($aboutVW->mark) ?>"></td>
            <td><?php echo htmlspecialchars($aboutVW->model) ?></td>
            <td><?php echo htmlspecialchars($aboutVW->carcase) ?></td>
            <td><?php echo htmlspecialchars($aboutVW->fuel) ?></td>
            <td><?php echo htmlspecialchars($aboutVW->power) ?></td>
            <td><?php echo htmlspecialchars($aboutVW->price) ?></td>
            <!-- <td><?php echo htmlspecialchars($aboutVW->id) ?></td> -->
            <td>
                <a href="index.php?action=view-vw&id=<?= $aboutVW->id ?>" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                <a href="index.php?action=update-vw&id=<?= $aboutVW->id ?>" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <a href="index.php?action=delete-vw&id=<?= $aboutVW->id ?>" class="btn btn-danger">
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
