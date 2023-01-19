<?php

namespace app\classes;

class UploadFoto extends Upload{

    protected $extensions = ['png', 'jpg'];

    public function upload() {
        return $this->teste();
       // return "Gerou a foto {$this->rename()}";
    }
}