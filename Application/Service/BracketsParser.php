<?php

namespace Application\Service;

use Application\Service\Api\Parsable;

class BracketsParser implements Parsable
{
    public function check(?string $expression): void
    {
        echo (($this->parse($expression) === true) ? "Right" : "Wrong")."\n";
    }

    private function parse(?string $expression): bool
    {
        $braces = str_split($expression);
        $map = [']' => '[', ')' => '(', '}' => '{'];
        $closing = array_keys($map);

        $stack = [];

        foreach($braces as $b){
            if(!in_array($b, $closing)){
                $stack[] = $b;
                continue;
            }
            if(end($stack) != $map[$b]) return false;
            array_pop($stack);
        }
        return count($stack)  == 0;
    }
}