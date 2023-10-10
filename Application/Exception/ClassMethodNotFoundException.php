<?php

namespace Application\Exception;

class ClassMethodNotFoundException extends \Exception
{
    public function __construct($methodName = "", $className = "")
    {
        $message = "Method ".$methodName.(strlen($methodName) > 0 ? "()" : ""). " of class ".$className
            ." has not been found";
        parent::__construct($message, 31, null);
    }
}