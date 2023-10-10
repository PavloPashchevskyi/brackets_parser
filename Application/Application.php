<?php

declare(strict_types=1);

namespace Application;

use Application\Exception\ClassMethodNotFoundException;
use Application\Exception\ClassNotFoundException;
use Application\Exception\FileOrDirectoryNotFoundException;

class Application
{
    private const CLASS_NAMESPACE = "Application\\Service\\";

    public static function run(int $argc, array $argv) {
        if ($argc < 2) {
            throw new \Application\Exception\TooFewParametersException();
        }
        if ($argc > 2) {
            throw new \Application\Exception\TooManyParametersException();
        }
        $callingClassName = "BracketsParser";
        $callingMethodName = "check";
        $methodArguments = $argv[1];
        $pathToScan = __DIR__."/../".str_replace("\\", "/", self::CLASS_NAMESPACE);
        $dirContent = scandir($pathToScan);
        if ($dirContent === false) {
            throw new FileOrDirectoryNotFoundException($pathToScan);
        }
        $classNames = array_filter($dirContent, function ($dirName) {
            return (strcmp($dirName, ".") != 0) && (strcmp($dirName, "..") != 0)
                && strcmp(substr($dirName, -4), ".php") == 0;
        });
        array_walk($classNames, function (&$className) {
            $className = substr($className, 0, -4);
        });
        $className = array_values(array_filter($classNames, function ($className) use ($callingClassName) {
            return strcmp(strtolower($callingClassName), strtolower($className)) == 0;
        }))[0];
        $fullClassName = "\\".self::CLASS_NAMESPACE.$className;
        if (!class_exists($fullClassName)) {
            throw new ClassNotFoundException($fullClassName);
        }
        $class = new $fullClassName();
        $methodName = strtolower($callingMethodName);
        if (!method_exists($fullClassName, $methodName)) {
            throw new ClassMethodNotFoundException($methodName, $fullClassName);
        }
        return $class->$methodName($methodArguments);
    }
}