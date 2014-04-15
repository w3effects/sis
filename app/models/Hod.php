<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;

class Hod extends \Eloquent implements UserInterface, RemindableInterface{

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'details' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'departments_id' => 'required|unique:hods,departments_id',
	];

    public static $messages = [

        'departments_id.unique' => 'This Department Already has a HOD !!'
    ];

	// Don't forget to fill this array
	protected $fillable = ['name','email','password','details','departments_id'];


    public function department()
    {
        return $this->belongsTo('Department','departments_id');
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

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
}