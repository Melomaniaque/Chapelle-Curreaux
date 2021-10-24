<?php

class Catalog extends Controller
{
    public function index()
    {
        // code...
        $book = new Book();
        $filtered = $book->findAll();


        if(count($_POST) > 0) {

            $filtered = $_POST['filtered'];
            switch ($filtered) {
                case '':
                    $filtered = $book->findAll();
                    break;
                case 'roman':
                    $filtered = $book->where('gender', 'roman');
                    break;
                case 'bandedessiner':
                    $filtered = $book->where('gender', 'bandedessiner');
                    break;
                case 'bienetre':
                    $filtered = $book->where('gender', 'bienetre');
                    break;
                case 'literature':
                    $filtered = $book->where('gender', 'literature');
                    break;
                default:
                    $filtered = $book->findAll();

            }

        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Catalogue','catalog'];

        $this->view('catalog',[
            'crumbs'=>$crumbs,
            'rows'=>$filtered,
        ]);

    }

    public function add()
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('home');
        }

        $errors = array();
        if(count($_POST) > 0)
        {

            $book = new Book();
            if($book->validate($_POST))
            {

                $book->insert($_POST);
                $this->redirect('schools');
            }else
            {
                //errors
                $errors = $book->errors;
            }
        }

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['catalog','catalog'];
        $crumbs[] = ['ajout','catalog/add'];

        $this->view('catalog.add',[
            'errors'=>$errors,
            'crumbs'=>$crumbs,

        ]);
    }


    public function edit($id = null)
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $book_edit = new Book();
        $errors = array();
        $reservationDate = date("Y-m-d H:i:s");
        if(count($_POST) > 0)
        {
            if($book_edit->validate($_POST))
            {
                $_POST['user_id'] = $_SESSION['USER']->firstname;
                $_POST['reservation_date'] = $reservationDate;
                $_POST['return_date'] = date('Y-m-d', strtotime($reservationDate. ' + 5 days'));
                $book_edit->update($id,$_POST);

                $this->redirect('catalog');

            }else
            {
                //errors
                $errors = $book_edit->errors;
            }


        }

        $rows = $book_edit->where('id',$id);

        $this->view('catalog.edit',[
            'rows'=>$rows,
            'errors'=>$errors,

        ]);
    }
    // function  emprunt du livre
    public function borrow($id = null)
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $book_edit = new Book();
        $errors = array();
        if(count($_POST) > 0)
        {


            if($book_edit->validate($_POST))
            {
                $book_edit->update($id,$_POST);
                $this->redirect('users');
            }else
            {
                //errors
                $errors = $book_edit->errors;
            }
        }

        $rows = $book_edit->where('id',$id);

        $this->view('catalog.borrow',[
            'rows'=>$rows,
            'errors'=>$errors,
        ]);
    }

    // function pour le retour du livre
    public function return($id = null)
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $book_edit = new Book();
        $errors = array();
        if(count($_POST) > 0)
        {


            if($book_edit->validate($_POST))
            {
                $_POST['user_id'] = '';
                $book_edit->update($id,$_POST);
                $this->redirect('users');
            }else
            {
                //errors
                $errors = $book_edit->errors;
            }
        }

        $rows = $book_edit->where('id',$id);

        $this->view('catalog.return',[
            'rows'=>$rows,
            'errors'=>$errors,
        ]);
    }



}