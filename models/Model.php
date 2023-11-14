<?php

namespace models;

use vendor\myframe\Connection;

class Model
{

    public \PDO $db;

    public function __construct()
    {
        $conn = new Connection();
        $this->db = $conn->getConnection();
    }



}