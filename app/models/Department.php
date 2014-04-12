<?php

class Department extends \Eloquent {

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

    public function hod(){
        return $this->hasOne('Hod', 'departments_id');

    }

}