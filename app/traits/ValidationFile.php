<?php

namespace app\traits;

trait ValidationFile {

    public function validation() {
        if(!in_array($this->extension(), $this->extensions)) {
            throw new \Exception("Essa extensao não é aceita");
        }
    }

    protected function teste() {
        return 'teste';
    }
}