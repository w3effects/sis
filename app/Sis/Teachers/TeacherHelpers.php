<?php namespace Sis\Teachers;

use Illuminate\Support\Facades\Auth;

class TeacherHelpers {

    public function isTeacher(){
        if(Auth::check()){

            if(Auth::user()->role == 'teachers') return true;

            return false;
        }

        return false;
    }

    public function isEditable($id){

        if(Auth::check()){
            if(Auth::user()->role == 'teachers'){
                if($id == Auth::user()->id) return true;
            }
        }

        return false;

    }
} 