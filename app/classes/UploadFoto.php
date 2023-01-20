<?php

namespace app\classes;

class UploadFoto extends Upload{

    const PROPRIEDADE_TESTE = "propriedade_teste";
    public static $porpriedade_teste = 'propriedade_teste';

    protected $extensions = ['png', 'jpg'];

    public static function teste() {
        return "teste";
    }
    public function upload() {
        // return $this->teste();
       // return "Gerou a foto {$this->rename()}";
    }
}