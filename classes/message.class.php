<?php

class Message extends Database {
    
    public function sendMessage($name = null, $email = null, $message = null, $date = null) {
        $stmt = $this->connect()->prepare("INSERT INTO messages (name, email, message, date) VALUES(:name, :email, :message, :date)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":message", $message);
        $stmt->bindParam(":date", $date);
        $stmt->execute();

        return $stmt;
    }
}
