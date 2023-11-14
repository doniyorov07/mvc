<?php

/** @var \controllers\ProductController $list */

foreach ($list as $item) {
    echo $item['id'] . '<br>';
    echo $item['name'] . '<br>';
}