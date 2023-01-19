<?php

namespace app\traits;

class ValidationFile {

    public function validation() {
        if(in_array($this->extension(), $this->extensions)) {
            throw new \Exception("Essa extensao não é aceita");
        }
    }
}