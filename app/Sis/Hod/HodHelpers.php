<?php namespace Sis\Hod;

use Illuminate\Support\Facades\Auth;

class HodHelpers {

    public function isHod(){
        if(Auth::check()){

            if(Auth::user()->role == 'hods') return true;

            return false;
        }

        return false;
    }

    public function isEditable($id){

        if(Auth::check()){
            if(Auth::user()->role == 'hods'){
                if($id == Auth::user()->id) return true;
            }
        }

        return false;

    }
} 