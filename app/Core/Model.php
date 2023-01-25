<?php


namespace Core;

class Model {

    public \PDO $connection;

    public function __construct() {
        $db = new Database(
            DATABASE['Host'],
            DATABASE['Name'],
            DATABASE['User'],
            DATABASE['Pass']);
        
        $this->connection = $db->connect();
    }
}
