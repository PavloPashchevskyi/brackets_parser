<?php

namespace Application\Exception;

class CommandLineParametersException extends \Exception
{
    public function __construct($message = "", $code = 10, Throwable $previous = null)
    {
        $message = "Command line parameters exception: ".$message;
        parent::__construct($message, $code, $previous);
    }
}