<?php
declare(strict_types=1);

namespace Application\Service\Api;

interface Parsable
{
    function check(?string $expression): void;
}