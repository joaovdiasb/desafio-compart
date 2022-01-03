<?php

/**
 * @param string $path
 * @return string
 */
function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], 'localhost') === 0) {
        if ($path) {
            return CONF_URL_TEST . '/' . ($path[0] == '/' ? mb_substr($path, 1) : $path);
        }

        return CONF_URL_TEST;
    }

    if ($path) {
        return CONF_URL_BASE . '/' . ($path[0] == '/' ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

/**
 * @return string
 */
function root(): string
{
    return str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']);
}

/**
 * @param string $path
 * @param array $params
 * @param string $extension
 * @return void
 */
function view(string $path, array $params = [], string $extension = '.php'): void
{
    extract($params);
    include(root() . '/resources/views/' . $path . $extension);
}

/**
 * @param string $path
 * @param array $slots
 */
function component(string $path, array $slots = [])
{
    $componentClass = 'App\View\Components\\' . $path;
    $componentSlots = get_class_vars($componentClass);

    foreach ($slots as $index => $prop) {
        if (array_key_exists($index, $componentSlots)) {
            $componentSlots[$index] = $prop;
        }
    }

    $componentSlots = array_values($componentSlots);

    return (new $componentClass(...$componentSlots))->render();
}
