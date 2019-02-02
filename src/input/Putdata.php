<?php

namespace injecttion\input;

class Putdata
{

    public $data = NULL;

    public function setData ()
    {
        return $this->data = 'set data';
    }
    public function putData ()
    {
        return var_dump($this->data);
    }
}


?>