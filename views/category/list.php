
<?php

/** @var \controllers\ProductController $list */

?>

<div class="container">
    <a href="/admin/add_category.php" class="btn btn-success"> Qo'shish</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>id</th>
            <th>Category name</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach (getCategoryList($list) as $item) {
            echo "<tr>";
            echo "<td>" . $item['id'] . "</td>";
            echo "<td>" . $item['name'] . "</td>";
            echo "<td><a href='/admin/update-categroy.php?.id=". $item["id"];
        }

        ?>
        </tbody>
    </table>

</div>
