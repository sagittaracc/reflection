<?php

namespace sagittaracc;

use ReflectionClass as GlobalReflectionClass;

class ReflectionClass extends GlobalReflectionClass
{
    public function getMethod($name)
    {
        $method = parent::getMethod($name);
        $extMethod = new ReflectionMethod($method->class, $method->name, $this->getFileName());
        return $extMethod;
    }
}
