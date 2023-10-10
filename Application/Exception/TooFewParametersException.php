<?php

namespace Application\Exception;

class TooFewParametersException extends CommandLineParametersException
{
    public function __construct()
    {
        parent::__construct("too few parameters transferred.", 11, null);
    }
}