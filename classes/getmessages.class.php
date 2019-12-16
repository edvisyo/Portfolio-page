<?php 

class Getmessages {

    private $id,
            $name,
            $email,
            $message,
            $date;

    public function __construct($dbRows) {
        $this->id = $dbRows['id'];
        $this->name = $dbRows['name'];
        $this->email = $dbRows['email'];
        $this->message = $dbRows['message'];
        $this->date = $dbRows['date'];
    }  
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getDate() {
        return $this->date;
    }
}