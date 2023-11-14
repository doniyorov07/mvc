<?php

namespace controllers;

use vendor\myframe\Controller;
use vendor\myframe\Connection;

class ProductController extends Controller
{
    public function list(): void
    {
       $sql = "select * from product";
       $conn = new Connection();
       $db = $conn->getConnection();
       $state = $db->prepare($sql);
       $state->execute();
       $result = $state->fetchAll();

        $this->view->render('product/list', [
            'list' => $result
        ]);
    }

    public function update(int $id):void
    {
        $this->view->render('product/update');
    }

}