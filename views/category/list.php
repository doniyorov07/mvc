
<?php

/** @var \controllers\ProductController $list */

foreach ($list as $item) {
    echo $item['id'] . $item['name']  . '<br>';
}