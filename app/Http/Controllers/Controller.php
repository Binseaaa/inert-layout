<?php

namespace App\Http\Controllers;
use App\Models\User;

abstract class Controller
{
    public function index() {
        $user = User::orderBy('id')->get();
        return inertia('About', [
            'user' => $user
        ]);
    }
}
