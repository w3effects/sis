<?php

App::error(function(Illuminate\Session\TokenMismatchException $exception)
{
    return Redirect::back()->with('error_message','Hey Stop !! Don\'t try this again ');
});

App::missing(function($exception)
{
    return Response::view('notFound', array(), 404);
});