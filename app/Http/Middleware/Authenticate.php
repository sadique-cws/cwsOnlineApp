<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if($request->expectsJson()){
            return null;
        } 
        else{
            if($request->is('teacher') || $request->is('teacher/*')){
                return route('Teacher.login');
            }
            elseif($request->is('user') || $request->is('user/*')){
                return route('user.login');
            }
            else{
                return route('login');
            }
        }
    }
}
