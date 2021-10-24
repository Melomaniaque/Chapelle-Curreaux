<?php

/**
 * home controller
 */
class Profile extends Controller
{

    function index($id = '')
    {

        $errors = array();
        $User = new User();
        $row = $User->first('user_id', $id);

        $this->view('profile', [
            'errors' => $errors,
            'row' => $row,

        ]);

    }

}
