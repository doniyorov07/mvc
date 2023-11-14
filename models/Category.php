<?php

namespace models;

use vendor\myframe\Connection;

class Category extends Model
{

    public function getList(): array|bool
    {
        $sql = "select * from category";
        $state = $this->db->prepare($sql);
        $state->execute();
        return $state->fetchAll();
    }

    public function insertCategroy()
    {

    }




}