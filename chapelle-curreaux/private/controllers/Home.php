<?php

/**
 * home controller
 */
class Home extends Controller
{
	
	function index()
	{
		// code...

		$user = new User();
        $books = new Book();
        $bookrows = $books->findAll();
		$data = $user->findAll();


        $this->view('home',[
            'rows'=>$data,
            'bookrows'=>$bookrows

        ]);
	}
}
