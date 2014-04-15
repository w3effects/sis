<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;

class Principal extends BaseUserModel{

    protected $table = 'principals';
    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];

    // Don't forget to fill this array
    protected $fillable = [];

}