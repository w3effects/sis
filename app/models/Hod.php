<?php

class Hod extends BaseUserModel{

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

}