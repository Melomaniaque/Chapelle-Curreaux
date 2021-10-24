<?php

/**
 * login controller
 */
class Signup extends Controller
{

    function index()
    {
        // code...
        $errors = array();
        if (count($_POST) > 0) {

            $user = new User();

            if ($user->validate($_POST)) {

                $user->insert($_POST);
            } else {
                //errors
                $errors = $user->errors;
            }
        }

        $this->view('signup', [
            'errors' => $errors,
        ]);
    }
}
