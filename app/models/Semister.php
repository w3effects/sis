<?php

class Semister extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'details' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'departments_id' =>'required|exists:departments,id'

	];

	// Don't forget to fill this array
	protected $fillable = ['name','details','start_date','end_date','departments_id'];

}