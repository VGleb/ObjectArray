<?php

namespace VGleb\ObjectArray;

class ObjectArray {

    private $properties;

    public function __construct (array $_array)
    {
        $this->properties = $_array;
    }

    public function __get ($_property)
    {
        if ( array_key_exists($_property, $this->properties) )
            return $this->properties[$_property];
        else
            return null;
    }

    public function __set ($_property, $_value)
    {
        $this->properties[$_property] = $_value;
    }

    public function getArray ()
    {
        return $this->properties;
    }

}
