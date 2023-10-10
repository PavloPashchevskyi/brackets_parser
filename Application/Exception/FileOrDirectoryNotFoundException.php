<?php

namespace Application\Exception;

class FileOrDirectoryNotFoundException extends \Exception
{
    public function __construct($path = "")
    {
        $message = "File or directory \"".$path."\" has not been found";
        parent::__construct($message, 20, null);
    }
}