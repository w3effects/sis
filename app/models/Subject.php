<?php

class Subject extends BaseModel {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required',
        'details' => 'required',
        'max_marks' => 'required|numeric|max:100|min:35',
        'min_marks' => 'required|numeric|min:35|max:100',
        'teachers_id' => 'required|exists:teachers,id|unique:subjects,teachers_id',
        'semisters_id' => 'required|exists:semisters,id'
    ];

    public static $messages = [
        'teachers_id.unique' => 'This Teacher is already assigned to another Subject'
    ];

	// Don't forget to fill this array
	protected $fillable = ['name','details','max_marks','min_marks','teachers_id','semisters_id'];

}