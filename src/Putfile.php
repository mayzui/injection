<?php

namespace injection;

class Putfile
{

    public $file = NULL;

    public function setFile ()
    {
         $this->file = 'set file';
         return $this;
    }

    public function putFile()
    {
        echo $this->file;
    }
    
}