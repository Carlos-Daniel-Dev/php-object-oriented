<?php

require "vendor/autoload.php";

use app\classes\UploadFile;

$upload = new UploadFile('arquivo.zip');

// echo $upload->teste();
// $upload->extension();
// $upload->rename();
echo $upload->upload();

$upload->validation();
echo $upload->upload();