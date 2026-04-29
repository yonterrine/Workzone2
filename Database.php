<?php

class Database
{
    private $pdo;

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";
        $this->pdo = new PDO($dsn, $config['username'], $config['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]; (SIR HINDI KO ALAM BAKIT NAG AUTOMATICALLY NAG ADD NG CODE NA YUNG SA ITAAS, HINDI KO YUNG NILAGAY, SORRY PO)


    try() {
        $pdo = new PDO($dsn, $config['username'], $config['password'], $options);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
    public function Query($Query)
    {
        try {
            $sth = $this->conn->prepare($Query);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Database query error: " . $e->getMessage());
        }
    }
}