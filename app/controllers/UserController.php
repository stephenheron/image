<?php

class UserController extends \BaseController {

  public function __construct()
  {
    $this->beforeFilter('auth.basic.once', array('except' => 'store'));
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
    $user = User::find($id);
    if($user){
      return Response::json($user);
    } else {
      App::abort(404);
    }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
  {
    $user = User::find($id);
    if($user->id == Auth::user()->id){
      if($user){
        $user->update(Input::all());
        $user->save();
        return Response::json($user);
      } else {
        App::abort(404);
      }
    } else {
      App::abort(403);
    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
    $user = User::find($id);
    if($user->id == Auth::user()->id){
      $user->delete();
    } else {
      App::abort(403);
    }
	}

}
