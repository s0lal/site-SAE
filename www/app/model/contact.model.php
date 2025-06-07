<?php

class Message {
    public static function save($name, $email, $message) {
       
        $line = "$name <$email>: $message\n";
        file_put_contents("messages.txt", $line, FILE_APPEND);
    }
}