<?php

namespace App\View\Components;

class Component
{
    /**
     * Return constructor parameters as array
     * @return array
     */
    protected function slots(): array
    {
        $ref = new \ReflectionClass($this);
        if (!$ref->isInstantiable()) {
            return [];
        }

        $parameters  = [];
        $constructor = $ref->getConstructor();
        $params      = $constructor->getParameters();

        foreach ($params as $param) {
            $name              = $param->getName();
            $parameters[$name] = $this->{$name};
        }

        return $parameters;
    }
}