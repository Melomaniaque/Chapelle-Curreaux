<?php

class Book extends model
{

    protected $allowedColumns = [
        'title',
        'image',
        'releaseDate',
        'description',
        'author',
        'gender',
        'book_id',
        'available',

    ];

    protected $beforeInsert = [
        'make_book_id',

    ];


    public function validate($DATA)
    {

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_book_id($data)
    {
        $data['book_id'] = random_string(60);
        return $data;
    }




}