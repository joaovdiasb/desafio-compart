<?php

namespace App\Controller;

class Controller
{
    /**
     * @param string $path
     * @param array $params
     * @param string $extension
     * @return $this
     */
    protected function view(string $path, array $params = [], string $extension = '.php'): self
    {
        view($path, $params, $extension);

        return $this;
    }
}