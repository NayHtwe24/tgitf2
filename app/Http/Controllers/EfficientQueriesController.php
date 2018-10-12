<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EfficientQueriesController extends Controller
{
    public function forFirst()
    {
        $user = User::first();

        $user->posts->first();
        $user->posts()->first();

        return 'EfficientQueriesController::forFirst()';
    }

    public function forCount()
    {
        $user = User::first();

        $user->posts->count();
        $user->posts()->count();

        return 'EfficientQueriesController::forCount()';
    }

    public function forPluck()
    {
        $user = User::first();

        $user->posts->pluck('title', 'id');
        $user->posts()->pluck('title', 'id');

        return 'EfficientQueriesController::forPluck()';
    }
}
