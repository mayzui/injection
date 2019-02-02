<?php

namespace injecttion;

class Putfile
{

    public $file = NULL;

    public function setFile ()
    {
        return $this->file = 'set file';
    }
    
    public function putFile ()
    {
        return var_dump($this->file);
    }
}


?>