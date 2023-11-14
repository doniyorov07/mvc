<?php

namespace controllers;

use models\Category;
use vendor\myframe\Connection;
use vendor\myframe\Controller;

class CategoryController extends Controller
{


    public function list(): void
    {
        $category = new Category();

        $result = $category->getList();

        $this->view->render('category/list', [
            'list' => $result
        ]);
    }

    public function update(int $id):void
    {
        $category = new Category();

        $result = $category->getList();

        $this->view->render('category/list', [
            'list' => $result
        ]);
    }

}