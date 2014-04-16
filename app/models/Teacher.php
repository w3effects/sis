<?php

class Teacher extends BaseUserModel {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'details' => 'required',
        'email' => 'required',
        'password'=> 'required',
        'departments_id'=> 'required | exists:departments,id',

	];

	// Don't forget to fill this array
	protected $fillable = ['name','details','email','password','departments_id'];

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */
    public function department()
    {
        return $this->belongsTo('Department','departments_id');
    }

    public function subject()
    {
        return $this->hasOne('Subject','teachers_id');
    }
}
