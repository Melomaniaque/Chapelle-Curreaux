<?php

/**
 * User Model
 */
class User extends Model
{

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'birthdate',
        'adress',
        'validate',
        'rank',
        'user_id',
        'password',



    ];

    protected $beforeInsert = [
        'make_user_id',
        'hash_password',
        'get_rank',
    ];

    public function validate($DATA)
    {
        $this->errors = array();



        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = random_string(60);
        return $data;
    }


    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function get_rank($data)
    {
        if (empty($data['rank'])) {
            $data['rank'] = 'lecturer';
            return $data;
        }

    }



}