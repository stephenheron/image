<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
  protected $hidden = array('password');
  
  /**
	 * The attributes that are fillable while performing mass assignment
	 *
	 * @var array
	 */

  protected $fillable = array('username', 'password', 'forname', 'surname');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
  }

  public function images()
  {
    return $this->hasMany('Image');
  }

  public function selectedTopics()
  {
    return $this->hasMany('SelectedTopic');
  }

  public static function validate($input)
  {
    $rules = array(
      'username'  => 'required|email|unique:users|max:64',
      'password'  => 'required|max:64',
      'forename'  => 'required|max:64',
      'surname'   => 'required|max:64',
    );

    $messages = array(
      'username.required' => 'The email field is required.',
      'username.email'    => 'Your email is not a vaild email.',
      'username.unique'   => 'Your email is not unique.',
      'username.max'      => 'Your email too long, 64 characters max.',
    );

    $validation = Validator::make($input, $rules, $messages);

    if($validation->fails()){
      return $validation->errors();
    }
  }

}
