<?php

namespace vendor\myframe;

class View
{

    public function render($viewFile, $data = null)
    {
        extract($data);
        include 'views/layout/main.php';
        include 'views/'.$viewFile.'.php';
        include 'views/layout/footer.php';
    }
}