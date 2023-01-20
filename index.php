<?php

require "vendor/autoload.php";


abstract class Email {

    public function __construct() {

    }

    public static function who() {
        return "Alexandre";
    }

    public static function send() {
        return static::who();
    }
}

class SendEmail extends Email {

    public function teste() {
        return "teste";
    }
    public static function who() {
        return $this->teste();
    }
}

echo SendEmail::send();