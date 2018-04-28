<?php
require_once '../view/template/header.php';
?>

<a href="index.php?action=create-audi" class="btn btn-info">Новая машина</a>

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
    <?php foreach ($audi as $aboutAudi) { ?>
        <tr>
            <td><img src="../img/Audi.png" alt="<?php echo htmlspecialchars($aboutAudi->mark) ?>"></td>
            <td><?php echo htmlspecialchars($aboutAudi->model) ?></td>
            <td><?php echo htmlspecialchars($aboutAudi->carcase) ?></td>
            <td><?php echo htmlspecialchars($aboutAudi->fuel) ?></td>
            <td><?php echo htmlspecialchars($aboutAudi->power) ?></td>
            <td><?php echo htmlspecialchars($aboutAudi->price) ?></td>
            <!-- <td><?php echo htmlspecialchars($aboutAudi->id) ?></td> -->
            <td>
                <a href="index.php?action=view-audi&id=<?= $aboutAudi->id ?>" class="btn btn-primary">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                <a href="index.php?action=update-audi&id=<?= $aboutAudi->id ?>" class="btn btn-warning">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <a href="index.php?action=delete-audi&id=<?= $aboutAudi->id ?>" class="btn btn-danger">
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
