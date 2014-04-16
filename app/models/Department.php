<?php

class Department extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required|unique:departments,name',
        'description'=>'required',
        'university'=>'required'
	];

    public  static $messages =[
        'name.unique' => 'Department Already exits',
        'name.required' => 'Department Name required'

    ];

	// Don't forget to fill this array
	protected $fillable = ['name','description','university'];

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */

    public function hod(){
        return $this->hasOne('Hod', 'departments_id');

    }

    public function teachers(){

        return $this->hasMany('Teacher','departments_id');
    }

}