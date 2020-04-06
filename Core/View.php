<?php
namespace AHT;

/**
 * View
 *
 * PHP version 7.3.11
 */
class View 
{
    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = []) 
    {
        extract($args, EXTR_SKIP);
        $file = 'src/Views/'.$view;
        if (is_readable($file)) {
            require $file;
        } else {
            echo '$file not found';
        }
    }

    /**
     * Redirect to a url
     *
     * @param string $view  The url
     *
     * @return void
     */
    public static function redirect($string)
    {
        header('Location: '.$string);
    }
}