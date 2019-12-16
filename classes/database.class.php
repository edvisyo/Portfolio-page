<?php

class Database {

    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $charset;

    public function connect() {

        $this->dbhost = "localhost";
        $this->dbuser = "root";
        $this->dbpass = "";
        $this->dbname = "portfoliodb";
        $this->charset = "UTF8";

        try {
           $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
           $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
           //echo "Connected";
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $pdo; 
        } catch(PDOException $e) {
            echo "Connection failed:" . $e->getMessage();
        }
    }


    public function getData($sql) {
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            $data[] = new Getmessages($row);
        }
        if(!empty($data)) {
            return $data;
        } else {
            return false;
        }
    }
}
