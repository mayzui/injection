<?php

namespace injecttion\input;

class Putfile
{

    public $file = NULL;

    public function setFile ()
    {
        return $this->data = 'set file';
    }
    public function putFile ()
    {
        return var_dump($this->file);
    }
}


?>