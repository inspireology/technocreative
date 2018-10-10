<?php
abstract class Base
{
    function __get($name){
        if(isset($this->$name)) {
            return $this->$name;
        } else {
            $this->$name = $this->$name();
            return $this->$name;
        }

    }

    function __set($name, $value) {
        $this->$name = $value;
    }

}