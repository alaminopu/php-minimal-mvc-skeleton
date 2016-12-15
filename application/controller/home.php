<?php

/**
 * Home Controller
 */
class Home extends Controller
{
    // Index
    public function index()
    {
        // load views
        require INCLUDES . 'header.php';
        require INCLUDES . 'nav.php';
        require APP . 'view/home/index.php';
        require INCLUDES . 'footer-widget.php';
        require INCLUDES . 'footer.php';
    }
}