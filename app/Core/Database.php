<?php


namespace Core;

class Database
{
    private string $host;
    private string $dbName;
    private string $user;
    private string $pass;

    public function __construct(string $host, string $dbName, string $user, string $pass)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->pass = $pass;
    }
        

    public function connect(): \PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8";
        return new \PDO($dsn, $this->user, $this->pass, [
            \PDO::ATTR_EMULATE_PREPARES => false,
            \PDO::ATTR_STRINGIFY_FETCHES => false
        ]);
    }
}
