<?php namespace Sis\Department;

use Illuminate\Support\Facades\Auth;

class DepartmentHelpers {

    public function isValidtoview()
    {
        if(Auth::check()){

            $validUsers = ['principal'];
            if(in_array(Auth::user()->role, $validUsers)){
                return true;
            }

            return false;
        }

        return false;
    }

} 