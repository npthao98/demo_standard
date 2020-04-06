<?php
namespace NPT\Controllers;

use AHT\View;
use NPT\Models\Product;

/**
 * Home controller
 *
 * PHP version 7.3.11
 */
class Home
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        View::render('home.php');
    }
}