<?php

/**
 * users controller
 */
class Users extends Controller
{
	
	function index()
	{
		// code...
        $admin = Auth::getRank() == 'employee';
		if(!$admin)
        {
            $this->redirect('home');
        }

		$user = new User();
        $data = $user->findAll();
        $book = new Book();
        $bookdata = $book->findAll();


        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['staff','users'];


		$this->view('users',[
		    'rows'=>$data,
		    'bookrows'=>$bookdata,
		    'crumbs'=>$crumbs
        ]);

	}
    public function edit($id = null)
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $edit = new User();

        $errors = array();
        if(count($_POST) > 0)
        {

            if($edit->validate_user($_POST))
            {

                $edit->update($id,$_POST);
                $this->redirect('users');
            }else
            {
                //errors
                $errors = $edit->errors;
            }
        }

        $rows = $edit->where('id',$id);

        $this->view('users.edit',[
            'rows'=>$rows,
            'errors'=>$errors,

        ]);
    }

    public function delete($id = null)
    {
        // code...
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $user = new User();

        $errors = array();

        if(count($_POST) > 0)
        {

            $user->delete($id);
            $this->redirect('users');

        }

        $row = $user->where('id',$id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['users','users'];
        $crumbs[] = ['users','users/delete'];

        $this->view('users.delete',[
            'row'=>$row,
            'crumbs'=>$crumbs,
        ]);
    }

}
