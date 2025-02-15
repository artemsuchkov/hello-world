<?php 

namespace Artemsuchkov\HelloWorld;

class HelloWorld {

    public $msg;

    function __construct($msg=null) 
    {
        $this->msg = (!empty($msg)) ? $msg : "Hello world!";
    }

}