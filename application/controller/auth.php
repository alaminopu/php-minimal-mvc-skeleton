<?php

/**
 * Auth Controller
 */
class Auth extends Controller
{
    // Index
    public function index()
    {
        // load views
        require INCLUDES . 'header.php';
        require APP . 'view/auth/index.php';
        require INCLUDES . 'footer.php';
    }
}