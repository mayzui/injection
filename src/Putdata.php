<?php

namespace injection;

class Putdata
{

    public $data = NULL;

    public function setData ()
    {
         $this->data = 'set data';
         return  $this;
    }
    public function putData ()
    {
         echo $this->data;
    }
}