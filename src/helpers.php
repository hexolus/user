<?php

use Hexolus\User\Models\User;
use Illuminate\Support\Facades\Auth;

if (!function_exists('user')) {
    /**
     * Return user or null
     * 
     * @return User|null 
     */
    function user() {
        return Auth::user();
    }
}