<?php

function authConfig($authModel, $authTable){

    Config::set('auth.model',$authModel);
    Config::set('auth.table',$authTable);
}

function authSessionset(){

    Session::put('authModel',Config::get('auth.model'));
    Session::put('authTable',Config::get('auth.table'));

}

function authSessionDestroy(){

    Session::forget('authModel');
    Session::forget('authTable');
}
Event::listen('auth.login',function($q){
    authSessionset();
});

Event::listen('auth.logout',function($q){
    authSessionDestroy();
});

function homeUrl(){

    if(Auth::check()){

        return URL::to('/'.Auth::user()->role.'/'.Auth::user()->id);
    }else{

        return URL::to('/');
    }
}

function sqldate($string){

    $time = strtotime($string);
    $date = date('Y-m-d',$time);
    return $date;
}