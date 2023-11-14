<?php

namespace models;



class Product extends Model
{

    public function getList(): array|bool
    {
        $sql = "select * from product";
        $state = $this->db->prepare($sql);
        $state->execute();
        return $state->fetchAll();
    }

    public function insertCategroy()
    {

    }

}