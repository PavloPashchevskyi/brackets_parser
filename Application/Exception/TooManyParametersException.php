<?php

namespace Application\Exception;

class TooManyParametersException extends CommandLineParametersException
{
    public function __construct()
    {
        parent::__construct("too many parameters transferred.", 12, null);
    }
}