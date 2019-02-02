<?php

require_once '../vendor/autoload.php';

use injection\Putdata;
use injection\Putfile;


$data = new Putdata();
$data->setData()->putData();

$file = new Putfile();

$file->setFile()->putFile();