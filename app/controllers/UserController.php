<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	  return 'Hello World';	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
  {
    $user = User::create(Input::all());

    if($user->exists){
      return Response::json($user);
    } else {
      if($user->validationErrors){
        $message = (
          array('errors' => $user->validationErrors->all())
        );
        return Response::json($message, 422);
      } else {
        return Response::json(array('errors' => 'User was not saved'), 500);
      }
    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
