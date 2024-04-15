<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * load a view
 * @param string $name
 * @return void
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$name} not found'";
    }
}

/**
 * load a partial
 * @param string $name
 * @return void
 */
function loadPartial($name, $data = [])
{
    $partialPath = basePath("App/views/partials/{$name}.php");
    if (file($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "partial '{$name} not found!'";
    }
}

/**
 * inspect a value(S)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * inspect a value(S) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * format salary
 * 
 * @param string salary
 * @return string formatted salary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}

/**
 * sanitize data
 * 
 * @param string $dirty
 * @param string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

/**
 * redirect to a given url
 * @param string $url
 * @return void
 */
function redirect($url)
{
    header("location: {$url}");
    exit;
}
